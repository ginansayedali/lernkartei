<?php namespace lernkartei\classes;

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
        $stmt = $this->dbConnect->prepare(" INSERT INTO cards(created_date, word,
          word_meaning) VALUES (:zcdate, :zword, :zmeaning) ");
        $stmt->execute(array(
          'zcdate' => $card->getCreatedDate(),
          'zword' => $card->getCardWord(),
          'zmeaning' =>  $card->getCardWordMeaning()
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
      $stmt = $this->dbConnect->query(" SELECT id, created_date, word, word_meaning
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
      $stmt = $this->dbConnect->query(" SELECT id, created_date, word, word_meaning
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
    $stmt = $this->dbConnect->prepare(" INSERT INTO learned_cards(id, created_date, word, word_meaning)
    SELECT id, created_date, word, word_meaning
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
}
