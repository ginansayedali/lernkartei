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

    public function getNumberOfBoxes(){
      return $this->numberOfBoxes;

    }

    public function addBox($box){

    }

    public function removeBox($box){

    }

    public function deleteAllBoxes(){
      $this->numberOfBoxes = 0;
      $stmt = $this->dbConnect->prepare(" DELETE FROM box");
      $stmt->execute();
    }

  }
