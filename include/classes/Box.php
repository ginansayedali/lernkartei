<?php

class Box{

  private $elements = [];
  private $boxID;
  private $dbConnect;

  public function __construct($boxID = 1, $dbConnect){
    $this->dbConnect = $dbConnect;
    $this->boxID = $boxID;
  }

  public function add($card){
    $this->elements[] = $card;
  }

  public function save(){

    foreach ($this->elements as $element) {
      if (!$element->getID()){
        try {
          $stmt = $this->dbConnect->prepare(" INSERT INTO cards(create_date, word, word_meaning)
                                        VALUES (:zcdate, :zword, :zmeaning) ");
          $stmt->execute(array(
            'zcdate' => $element->getCreateDate(),
            'zword' => $element->getWord(),
            'zmeaning' =>  $element->getWordMeaning()
          ));
        } catch (PDOException $e){
          echo $e->getMessage();
        }

        $element->setID($this->dbConnect->lastInsertId());

        try {
          $stmt = $this->dbConnect->prepare(" INSERT INTO box_has_card(box, card)
                                        VALUES (:zbox, :zcard) ");
          $stmt->execute(array(
            'zbox' => $this->boxID,
            'zcard' =>  $element->getID(),
          ));
        } catch (PDOException $e){
          echo $e->getMessage();
        }

      }else {

        $element->setID($element->getID());

        try {
          $stmt = $this->dbConnect->prepare(" INSERT INTO box_has_card(box, card)
                                        VALUES (:zbox, :zcard) ");
          $stmt->execute(array(
            'zbox' => $this->boxID,
            'zcard' =>  $element->getID(),
          ));
        } catch (PDOException $e){
          echo $e->getMessage();
        }
      }
    }
  }

  public function remove($id){
    foreach($this->elements as $key => $card ){
      if ($card->getID() == $id){
        unset($this->elements[$key]);
        //todo: delete this card from database
        break;
      }
    }

     try {
    $stmt = $this->dbConnect->prepare(" DELETE FROM box_has_card WHERE box=".$this->boxID." AND card=". $id ."");
    $stmt->execute();
    }
    catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  public function getFirstCard(){

  }

  public function get($id){
    foreach($this->elements as $key => $card ){
      if ($card->getID() == $id){
        return $card;
      }
    }
  }

  public function getCards(){

    $stmt = $this->dbConnect->query(" SELECT id, create_date, word, word_meaning FROM cards
      JOIN box_has_card ON cards.id = box_has_card.card WHERE box_has_card.box=" . $this->boxID .  "");
    $fetchResult = $stmt->fetchall(PDO::FETCH_ASSOC);

    return $fetchResult;
  }
}
