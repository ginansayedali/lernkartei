<?php

namespace lernkartei\classes;

class TextCard extends Card
{
  const cardType = "text";
  private $cardID;
  private $cardCreatedDate;
  private $question;
  private $answer;

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

  public function setQuestion($question)
  {
    // todo: user input muss geprüft werden
    $this->question = $question;
  }

  public function getQuestion()
  {
    return $this->question;
  }

  public function setAnswer($answer)
  {
    // todo: user input muss geprüft werden
    $this->answer = $answer;
  }

  public function getAnswer()
  {
    return $this->answer;
  }
}
