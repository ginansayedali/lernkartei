<?php

  class Game{

    private $playerName;
    private $numberOfBoxes;
    private $dbConnect;
    private $boxes = []; // todo: implement get boxes

    public function __construct($dbConnect){
      $this->dbConnect = $dbConnect;

      $stmt = $dbConnect->query(" SELECT COUNT(*) FROM box ");
      $fetchResult = $stmt->fetchall(PDO::FETCH_ASSOC);
      $cardCount = $fetchResult[0]['COUNT(*)'];

      // hier db abfrage auf boxen + loop
      for ($i = 1; $i <= $cardCount; $i++ ){
          $this->boxes[$i] = new Box($i, $dbConnect);
          $this->boxes[$i]->setID($i);
          //$this->boxes[] = new Box($dbConnect);

      }
      // ende schleife
      $this->numberOfBoxes = count($this->boxes);
    }

    public function getBoxes(){
      return $this->boxes;
    }

    public function setPlayerName($playerName){
      $this->playerName = $playerName;
      $stmt = $this->dbConnect->prepare(" INSERT INTO game(player_name, number_of_boxes) VALUES (:pname, :nobox) ");
      $stmt->execute( array(':pname' =>  $this->playerName , ':nobox' => 1 ));
    }

    public function getPlayerName(){
      return $this->playerName;
    }
/*
    public function setNumberOfBoxes($numberOfBoxes){
      $this->numberOfBoxes = $numberOfBoxes;
      //todo: insert the number of boxes into database
      for ($i = 1; $i <= $this->numberOfBoxes; $i++){
        $stmt = $this->dbConnect->prepare(" INSERT INTO box(box_id) VALUES (" . $i . ") ");
        $stmt->execute();
      }

    }
*/


    public function getNumberOfBoxes(){
      return $this->numberOfBoxes;

    }

    public function addBox(){
      $this->numberOfBoxes = $this->numberOfBoxes + 1;
      $stmt = $this->dbConnect->prepare(" INSERT INTO box(box_id) VALUES (" . $this->numberOfBoxes . ") ");
      $stmt->execute();
    }

    public function deleteBox($boxID){
      if ($this->numberOfBoxes != 0);
      $this->numberOfBoxes = $this->numberOfBoxes -1;
      $stmt = $this->dbConnect->prepare(" DELETE FROM box WHERE box_id=" . $boxID);
      $stmt->execute();

    }

    public function deleteAllBoxes(){
      $this->numberOfBoxes = 0;
      $stmt = $this->dbConnect->prepare(" DELETE FROM box ");
      $stmt->execute();
    }



    public function moveCardToNextBox($cardID,$boxID){
      // $newID = $boxID + 1;
      if (isset($this->boxes[$boxID+1])){
        for ($i = 1; $i <= count($this->boxes); $i++ ){
            if($this->boxes[$i]->getBoxID() == $boxID){
               $i++;
               break;
            }
        }
        $newID = $this->boxes[$i]->getBoxID();
          try {
          $stmt = $this->dbConnect->prepare(" UPDATE box_has_card SET box=" . $newID . " WHERE box=". $boxID ." AND card=". $cardID );
          $stmt->execute();
          } catch (PDOException $e){
            echo $e->getMessage();
          }
      } else {
        // delete card
      }
    }
    //

    public function moveCardToFirstBox($cardID,$boxID){
      $newID = 1;
      try {
      $stmt = $this->dbConnect->prepare(" UPDATE box_has_card SET box=" . $newID . " WHERE box=". $boxID ." AND card=". $cardID );
      $stmt->execute();
      } catch (PDOException $e){
        echo $e->getMessage();
      }
    }

  }
