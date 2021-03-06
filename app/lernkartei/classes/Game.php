<?php

namespace lernkartei\classes;

  class Game
  {
    private $playerName;
    private $numberOfBoxes;
    private $dbConnect;
    private $boxes = [];

    public function __construct($dbConnect)
    {
      $this->dbConnect = $dbConnect;
      $stmt = $dbConnect->query(" SELECT * FROM box ORDER BY box_id");
      $fetchResult = $stmt->fetchall(\PDO::FETCH_ASSOC);
      for ($i = 0; $i < count($fetchResult) ; $i++ ){
          $this->boxes[$i] = new Box();
          $this->boxes[$i]->setBoxID($fetchResult[$i]['box_id']);
      }
      $this->numberOfBoxes = count($this->boxes);
    }

    public function setPlayerName($playerName)
    {
      $this->playerName = $playerName;
      $stmt = $this->dbConnect->prepare(" INSERT INTO game(player_name, number_of_boxes)
       VALUES (:pname, :nobox) ");
      $stmt->execute( array(':pname' =>  $this->playerName , ':nobox' => 1 ));
    }

    public function getPlayerName()
    {
      return $this->playerName;
    }

    public function addBox()
    {
      $this->numberOfBoxes = $this->numberOfBoxes + 1;
    }

    public function getBoxes()
    {
      return $this->boxes;
    }

    public function getNumberOfBoxes()
    {
      return $this->numberOfBoxes;
    }

    public function deleteBox($boxID)
    {
      if ($this->numberOfBoxes != 0);
      unset($this->boxes[$boxID]);
    }

    public function deleteAllBoxes()
    {
      $this->numberOfBoxes = 0;
    }

    public function moveCardToNextBox($cardID,$boxID)
    {
      for ($i = 0; $i < count($this->boxes); $i++ ){
        if($this->boxes[$i]->getBoxID() == $boxID){
          $i++;
          break;
        }
      }
      if (isset($this->boxes[$i])){
        $newID = $this->boxes[$i]->getBoxID();
        try {
          $stmt = $this->dbConnect->prepare(" UPDATE box_has_card SET
            box=" . $newID . " WHERE box=". $boxID ." AND card=". $cardID );
          $stmt->execute();
          } catch (PDOException $e){
            echo $e->getMessage();
          }
      } else {
        // $box = new Box();
        // $box->setBoxID($boxID);
        // $box->setAsLearned($cardID);
        $DBquery = new DBqueries($this->dbConnect);
        $DBquery->querySetAsLearnd($cardID, $boxID);
      }
    }

    public function moveCardToFirstBox($cardID,$boxID)
    {
      try {
        $stmt = $this->dbConnect->prepare(" UPDATE box_has_card SET box= 1
          WHERE box=". $boxID ." AND card=". $cardID );
        $stmt->execute();
      } catch (PDOException $e){
        echo $e->getMessage();
      }
    }

  }
