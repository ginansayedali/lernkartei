<?php

  class GamePlayer {

    private $playerName;
    private $numberOfBoxes;
    private $dbConnect;

    public function __construct($dbConnect){
      $this->dbConnect = $dbConnect;
    }

    public function setPlayerName($playerName){
      $this->playerName = $playerName;
    }

    public function getPlayerName(){
      return $this->playerName;
    }

    public function setNumberOfBoxes($numberOfBoxes){
      $this->numberOfBoxes = $numberOfBoxes;
      //todo: insert the number of boxes into database
      for ($i = 1; $i <= $this->numberOfBoxes; $i++){
        $stmt = $this->dbConnect->prepare(" INSERT INTO box(box_id) VALUES (" .$i. ") ");
        $stmt->execute();
      }
    }

    public function createBox(){
      // for ($i  = 1; $i <= $this->numberOfBoxes; $i++){
      //   $box = "box{$i}";
      //   $$box = new Box($i,$this->dbConnect);
      //   return $$box;
      // }
    }

    public function getNumberOfBoxes(){
      return $this->numberOfBoxes;

    }

    public function addBox(){
      $this->numberOfBoxes = $this->numberOfBoxes + 1;
      $stmt = $this->dbConnect->prepare(" INSERT INTO box(box_id) VALUES (" . $this->numberOfBoxes . ") ");
      $stmt->execute();

    }

    public function removeBox($box){
      if ($this->numberOfBoxes != 0);
      $this->numberOfBoxes = $this->numberOfBoxes -1;
      $stmt = $this->dbConnect->prepare(" DELETE FROM box WHERE box_id=" . $box);
      $stmt->execute();

    }

    public function deleteAllBoxes(){
      $this->numberOfBoxes = 0;
      $stmt = $this->dbConnect->prepare(" DELETE FROM box ");
      $stmt->execute();
    }

    // public function moveCardToNextBox($card,$boxID){
    //
    // }
    //
    // public function moveCardToFirstBox($card){
    //
    // }

  }
