<?php namespace lernkartei\classes;

class Box
{
  private $elements = [];
  private $boxID;
  private $dbConnect;

  public function __construct($boxID, $dbConnect)
  {
    $this->dbConnect = $dbConnect;
    $this->boxID = $boxID;
  }

   public function setBoxID($id)
   {
     $this->boxID = $id;
   }

  public function add($card)
  {
    $DBquery = new DBqueries($this->dbConnect);
    $DBquery->queryAddCardToBox($card, $this->boxID);
    $this->elements[] = $card;
  }

  public function setAsLearned($id)
  {
    unset($this->elements[$id]);
    $DBquery = new DBqueries($this->dbConnect);
    $DBquery->querySetAsLearnd($id, $this->boxID);
  }

  public function getFirstCard()
  {
    $DBquery = new DBqueries($this->dbConnect);
    $firstCard = $DBquery->queryGetFirstCard($this->boxID);
    return $firstCard;
  }

  public function getCardCount()
  {

    $DBquery = new DBqueries($this->dbConnect);
    $cardCount = $DBquery->queryGetCardCount($this->boxID);
    return $cardCount;
  }

  public function getBoxID()
  {
    return $this->boxID;
  }

  public function getCards()
  {
    $DBquery = new DBqueries($this->dbConnect);
    $crads = $DBquery->queryGetCards($this->boxID);
    return $cards;
  }
}
