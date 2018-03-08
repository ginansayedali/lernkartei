<?php namespace lernkartei\classes;

class Card
{

  private $cardID;
  private $cardCreateDate;
  private $cardWord;
  private $cardWordMeaning;

  public function __construct()
  {
    $this->cardCreateDate = strftime("%F %T");
  }

  public function setCardID($id)
  {
    $this->cardID = $id;
  }

  public function getCardID()
  {
    return $this->cardID;
  }

  public function getCreateDate()
  {
    return $this->cardCreateDate;
  }
  public function setCardWord($word)
  {
    // todo: user input muss geprüft werden
    $this->cardWord = $word;
  }

  public function getCardWord()
  {
    return $this->cardWord;
  }

  public function setCardWordMeaning($wordMeaning)
  {
    // todo: user input muss geprüft werden
    $this->cardWordMeaning = $wordMeaning;
  }

  public function getCardWordMeaning()
  {
    return $this->cardWordMeaning;
  }
}
