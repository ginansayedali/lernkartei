<?php

namespace lernkartei\classes;

abstract class Card
{
  
  private $cardID;
  private $cardCreatedDate;
  private $question;
  private $answer;

  abstract public function setCardID($id);

  abstract public function getCardID();

  abstract public function getCreatedDate();

  abstract public function setQuestion($question);

  abstract public function getQuestion();

  abstract public function setAnswer($answer);

  abstract public function getAnswer();

}
