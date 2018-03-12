<?php namespace lernkartei\classes;

class Card
{

  private $cardID;
  private $cardCreatedDate;
  private $cardWord;
  private $cardWordMeaning;

  public function __construct()
  {
    $this->cardCreatedDate = strftime("%F %T");
  }

  public function setCardID($id)
  {
    $this->cardID = $id;
  }

  public function getCardID()
  {
    return $this->cardID;
  }

  public function getCreatedDate()
  {
    return $this->cardCreatedDate;
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
