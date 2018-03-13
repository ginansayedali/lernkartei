<?php

namespace lernkartei\classes;

class Box
{
  private $elements = [];
  private $boxID;

  public function setBoxID($id)
  {
   $this->boxID = $id;
  }

  public function add($card)
  {
    $this->elements[] = $card;
  }

  public function setAsLearned($id)
  {
    unset($this->elements[$id]);
  }

  public function getBoxID()
  {
    return $this->boxID;
  }

  public function getCards()
  {
    return $this->elements;
  }

  // public function getBoxCardCount($dbConnect)
  // {
  //   $DBquery = new DBqueries($dbConnect);
  //   return $DBquery->queryGetCardCount($this->boxID);
  // }
}
