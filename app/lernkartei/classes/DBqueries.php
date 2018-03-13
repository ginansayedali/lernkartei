<?php

namespace lernkartei\classes;

class DBqueries
{
  private $dbConnect;

  public function __construct($dbConnect)
  {
    $this->dbConnect = $dbConnect;
  }

  public function queryAddCardToBox($card,$boxID)
  {
    if (!$card->getCardID()){
      try {
        $stmt = $this->dbConnect->prepare(" INSERT INTO cards(created_date, question,
          answer, type) VALUES (:zcdate, :zquestion, :zanswer, :ztype) ");
        $stmt->execute(array(
          'zcdate' => $card->getCreatedDate(),
          'zquestion' => $card->getQuestion(),
          'zanswer' =>  $card->getAnswer(),
          'ztype' => $card::cardType
        ));
      } catch (PDOException $e){
        echo $e->getMessage();
      }
      $card->setCardID($this->dbConnect->lastInsertId());
      try {
        $stmt = $this->dbConnect->prepare(" INSERT INTO box_has_card(box, card)
        VALUES (:zbox, :zcard) ");
        $stmt->execute(array(
          'zbox' => $boxID,
          'zcard' =>  $card->getCardID(),
        ));
      } catch (PDOException $e){
        echo $e->getMessage();
      }
    }else {
      $card->setCardID($card->getCardID());
      try {
        $stmt = $this->dbConnect->prepare(" INSERT INTO box_has_card(box, card)
        VALUES (:zbox, :zcard) ");
        $stmt->execute(array(
          'zbox' => $this->boxID,
          'zcard' =>  $card->getCardID(),
        ));
      } catch (PDOException $e){
        echo $e->getMessage();
      }
    }
  }

  public function queryGetFirstCard($boxID)
  {
    try {
      $stmt = $this->dbConnect->query(" SELECT id, created_date, question, answer
        FROM cards JOIN box_has_card ON cards.id = box_has_card.card
        WHERE box_has_card.box=" . $boxID . " ORDER BY cards.id LIMIT 1" );
      $fetchResult = $stmt->fetchall(\PDO::FETCH_ASSOC);
      return $fetchResult;
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  public function queryGetCards($boxID)
  {
    try {
      $stmt = $this->dbConnect->query(" SELECT id, created_date, question, answer
        FROM cards JOIN box_has_card ON cards.id = box_has_card.card
        WHERE box_has_card.box=" . $boxID );
      $fetchResult = $stmt->fetchall(\PDO::FETCH_ASSOC);
    return $fetchResult;
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  public function queryGetCardCount($boxID)
  {
    try {
      $stmt = $this->dbConnect->query(" SELECT COUNT(*) FROM box_has_card
      WHERE box=" . $boxID );
      $fetchResult = $stmt->fetchall(\PDO::FETCH_ASSOC);
      $cardCount = $fetchResult[0]['COUNT(*)'];
      return $cardCount;
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  public function querySetAsLearnd($id,$boxID)
  {
    try {
      $stmt = $this->dbConnect->prepare(" DELETE FROM box_has_card WHERE
        box=" . $boxID . " AND card=". $id );
      $stmt->execute();
    } catch (PDOException $e){
      echo $e->getMessage();
    }

    try {
    $stmt = $this->dbConnect->prepare(" INSERT INTO learned_cards(id, created_date, question, answer, type)
    SELECT id, created_date, question, answer, type
    FROM cards WHERE id=". $id );
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

  public function queryAddBox($num,$existedBox)
  {
    $newCount = $num + $existedBox;
    try {
      $stmt = $dbConnect->prepare(" INSERT INTO box(box_id)
      VALUES (" . $newCount . ") ");
      $stmt->execute();
    } catch (PDOException $e){
    echo $e->getMessage();
    }
  }

  public function queryDeleteBox($boxID)
  {
    try {
      $stmt = $this->dbConnect->prepare(" DELETE FROM box WHERE box_id=" . $boxID);
      $stmt->execute();
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  public function queryDeleteAllBoxes()
  {
    try {
      $stmt = $this->dbConnect->prepare(" DELETE FROM box ");
      $stmt->execute();
    } catch (PDOException $e){
      echo $e->getMessage();
    }
  }

  function queryGetAllCardsCount()
  {
    $stmt = $this->dbConnect->query(" SELECT COUNT(*) FROM cards"  );
    $fetchResult = $stmt->fetchall(\PDO::FETCH_ASSOC);
    // $cardsCount = $fetchResult[0]['COUNT(*)'];
    return $fetchResult[0]['COUNT(*)'];
  }

  function queryGetLearnedCardsCount()
  {
    $stmt = $this->dbConnect->query(" SELECT COUNT(*) FROM learned_cards"  );
    $fetchResult = $stmt->fetchall(\PDO::FETCH_ASSOC);
    return $fetchResult[0]['COUNT(*)'];
  }
}
