<?php

class Box{

  private $elements = [];
  private $boxID;
  private $dbConnect;

  public function __construct($boxID, $dbConnect){
    $this->dbConnect = $dbConnect;
    $this->boxID = $boxID;
  }
   public function setID($id){
     $this->boxID = $id;
     //return $this;
   }

  public function add($card){


    if (!$card->getID()){
      try {
        $stmt = $this->dbConnect->prepare(" INSERT INTO cards(create_date, word, word_meaning)
                                      VALUES (:zcdate, :zword, :zmeaning) ");
        $stmt->execute(array(
          'zcdate' => $card->getCreateDate(),
          'zword' => $card->getWord(),
          'zmeaning' =>  $card->getWordMeaning()
        ));
      } catch (PDOException $e){
        echo $e->getMessage();
      }

      $card->setID($this->dbConnect->lastInsertId());

      try {
        $stmt = $this->dbConnect->prepare(" INSERT INTO box_has_card(box, card) VALUES (:zbox, :zcard) ");
        $stmt->execute(array(
          'zbox' => $this->boxID,
          'zcard' =>  $card->getID(),
        ));
      } catch (PDOException $e){
        echo $e->getMessage();
      }

      $this->elements[] = $card;

    }else {

      $card->setID($card->getID());

      try {
        $stmt = $this->dbConnect->prepare(" INSERT INTO box_has_card(box, card) VALUES (:zbox, :zcard) ");
        $stmt->execute(array(
          'zbox' => $this->boxID,
          'zcard' =>  $card->getID(),
        ));
      } catch (PDOException $e){
        echo $e->getMessage();
      }

      $this->elements[] = $card;
    }

  }
  // todo : remove card from box
  // public function removeCard($id, $boxID){
  //   $newID = $boxID + 1;
  //   try {
  //   $stmt = $this->dbConnect->prepare(" UPDATE box_has_card SET box=" . $newID . " WHERE box=". $boxID ." AND card=". $id );
  //   $stmt->execute();
  //   } catch (PDOException $e){
  //     echo $e->getMessage();
  //   }
  // }

  public function deleteCard($id){
    try {
    $stmt = $this->dbConnect->prepare(" DELETE FROM box_has_card WHERE box=". $this->boxID ." AND card=". $id );
    $stmt->execute();
    } catch (PDOException $e){
      echo $e->getMessage();
    }

    try {
    $stmt = $this->dbConnect->prepare(" DELETE FROM cards WHERE id=". $id );
    $stmt->execute();
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  public function getFirstCard(){
    try {
    $stmt = $this->dbConnect->query(" SELECT id, create_date, word, word_meaning FROM cards
      JOIN box_has_card ON cards.id = box_has_card.card WHERE box_has_card.box=" . $this->boxID . " ORDER BY cards.id LIMIT 1" );
    $fetchResult = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $fetchResult;
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  public function getCardCount(){

    try {
    $stmt = $this->dbConnect->query(" SELECT COUNT(*) FROM box_has_card WHERE box=" . $this->boxID );
    $fetchResult = $stmt->fetchall(PDO::FETCH_ASSOC);
    $cardCount = $fetchResult[0]['COUNT(*)'];
    return $cardCount;
    } catch (PDOException $e){
      echo $e->getMessage();
    }

  }

  public function getBoxID(){
    return $this->boxID;
  }
  //
  // public function get($id){
  //   foreach($this->elements as $key => $card ){
  //     if ($card->getID() == $id){
  //       return $card;
  //     }
  //   }
  // }

  public function getCards(){
    try {
    $stmt = $this->dbConnect->query(" SELECT id, create_date, word, word_meaning FROM cards
      JOIN box_has_card ON cards.id = box_has_card.card WHERE box_has_card.box=" . $this->boxID );
    $fetchResult = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $fetchResult;
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }
}
