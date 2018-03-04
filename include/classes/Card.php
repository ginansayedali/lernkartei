<?php

class Card{

  private $cardID;
  private $cardWord;
  private $cardWordMeaning;

  public function setID($id){
    $this->cardID = $id;
  }

  public function getID(){
    return $this->cardID;
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
