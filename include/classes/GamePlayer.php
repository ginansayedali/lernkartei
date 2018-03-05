<?php

  private $playerName;
  private $numberOfBoxes;


  public function setPlayerName($playerName){
    $this->playerName = $playerName;
  }

  public function getPlayerName(){
    return $this->playerName;
  }

  public function setNumberOfBoxes($numberOfBoxes){
    $this->numberOfBoxes = $numberOfBoxes;
    // todo: insert the number of boxes into database
  }

  public function getNumberOfBoxes(){
    return $this->numberOfBoxes;
  }

  public function addBox($box){

  }

  public function removeBox($box){

  }
