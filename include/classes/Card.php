<?php

class Card{

  private $cardID;
  private $cardCreateDate;
  private $cardWord;
  private $cardWordMeaning;

  public function __construct(){
    $this->cardCreateDate = strftime("%F %T");
  }

  public function setID($id){
    $this->cardID = $id;
  }

  public function getID(){
    return $this->cardID;
  }

  public function getCreateDate(){
    return $this->cardCreateDate;
  }
  public function setWord($word){
    // todo: user input muss geprüft werden
    $this->cardWord = $word;
  }

  public function getWord(){
    return $this->cardWord;
  }

  public function setWordMeaning($wordMeaning){
    // todo: user input muss geprüft werden
    $this->cardWordMeaning = $wordMeaning;
  }

  public function getWordMeaning(){
    return $this->cardWordMeaning;
  }
}
