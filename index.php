<!DOCTYPE html>
<?php require_once 'vendor/autoload.php';
use lernkartei\classes\Game;
use lernkartei\classes\Card;
use lernkartei\classes\Box;
use lernkartei\classes\DBqueries;
require_once dirname(__FILE__).'/app/lernkartei/init/connect.php';
require_once dirname(__FILE__).'/app/lernkartei/init/routes.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lernkartei</title>
    <link rel="stylesheet" href="<?php echo $css ?>bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $css ?>bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $css ?>main.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class=" login-page">
            <h1 class="text-center"> <span class="selected">Add card</span></h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="input-container">
                <input
                  class="form-control"
                  type="text"
                  name="card_word"
                  autocomplete="off"
                  placeholder="Word"
                  required />
              </div>
              <div class="input-container">
                <input
                  class="form-control"
                  type="text"
                  name="card_meaning"
                  autocomplete="off"
                  placeholder="Meaning"
                  required />
              </div>
              <div class="input-container">
                <input
                  class ="btn btn-outline-info"
                  name = "add_card"
                  type="submit"
                  value="Add" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <?php
    ini_set('display_errors', true);
    ini_set('error_reporting', E_ALL);
    error_reporting(E_ALL);

    $game = new Game($dbConnect);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['add_card'])) {
        $box = new Box(1,$dbConnect);
        $card = new Card();
  	    $card->setCardWord($_POST['card_word']);
  	    $card->setCardWordMeaning($_POST['card_meaning']);
        $box->add($card);
      }
    }
    // $box->removeCard(481,1);
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $do = isset($_GET['do']) ? $_GET['do'] : 'move';
      if ($do == 'move'){
        $cardID = isset($_GET['cardID']) && is_numeric($_GET['cardID']) ? intval($_GET['cardID']) : 0;
        $boxID = isset($_GET['boxID']) && is_numeric($_GET['boxID']) ? intval($_GET['boxID']) : 0;
        $game->moveCardToNextBox($cardID, $boxID);
      } elseif ($do == 'notsure'){
        $cardID = isset($_GET['cardID']) && is_numeric($_GET['cardID']) ? intval($_GET['cardID']) : 0;
        $boxID = isset($_GET['boxID']) && is_numeric($_GET['boxID']) ? intval($_GET['boxID']) : 0;
        $game->moveCardToFirstBox($cardID, $boxID);
      }
    }
    ?>

    <div class="container">
      <div class="row min-height">
        <div class="col-sm-12 col-md-12 col-lg-6">

          <?php
          $go = isset($_GET['do']) ? $_GET['do'] : 'move';
          if ($go == 'getcard'){
            $boxID = isset($_GET['boxID']) && is_numeric($_GET['boxID']) ? intval($_GET['boxID']) : 0;
            $box = new Box($boxID,$dbConnect);
            $card = $box->getFirstCard();

            if (isset($card)){ ?>
              <div class="card">
                <div class="card-body card-js">
                  <p class="badge badge-secondary">Created on: <?php echo $card[0]["created_date"]  ?> </p>
                  <p class="card-title text-center">
                   <?php echo '<h1 class="text-center">'.$card[0]["word"]. '</h1>' ?>
                   <span  class="showanswer btn btn-outline-secondary"> show</span>
                  </p>
                  <div class="show-answer hidden-class">
                    <h1 class="card-text">
                      <?php echo $card[0]["word_meaning"] ?>
                    </h1>
                     <button
                     type="button"
                     onclick='window.location.href=" <?php $_SERVER['PHP_SELF'];
                     echo '?do=notsure&cardID=' . $card[0]['id'] . '&boxID=' . $box->getBoxID() ;?>
                     "' class="btn btn-outline-secondary">Not sure</button>
                     <button
                     type="button"
                     onclick='window.location.href=" <?php $_SERVER['PHP_SELF'];
                     echo '?do=move&cardID=' . $card[0]['id'] . '&boxID=' . $box->getBoxID() ;?>
                     "' class="btn btn-outline-success">I got it</button>
                   </div>

                </div>
              </div>
            <?php }
            } ?>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-10 col-lg-10">
          <span class="badge badge-secondary" style="font-size: 13px">learned cards</span>
        <div class="progress">
          <?php $stmt = $dbConnect->query(" SELECT COUNT(*) FROM cards"  );
          $fetchResult = $stmt->fetchall(\PDO::FETCH_ASSOC);
          $cardsCount = $fetchResult[0]['COUNT(*)'];

          $stmt1 = $dbConnect->query(" SELECT COUNT(*) FROM learned_cards"  );
          $fetch = $stmt1->fetchall(\PDO::FETCH_ASSOC);
          $learnedCardsCount = $fetch[0]['COUNT(*)'];
          ?>
          <div class="progress-bar" role="progressbar" style="width: <?php echo $cardsCount+$learnedCardsCount ?>%;" aria-valuenow="<?php echo $learnedCardsCount ?>" aria-valuemin="0" aria-valuemax="<?php echo $cardsCount ?>"><?php echo $learnedCardsCount ?> von <?php echo $cardsCount+$learnedCardsCount ?> </div>
        </div>
      </div>
      </div>
      <br />
      <div class="row">
        <?php
        $boxes = $game->getBoxes();
        // $cardCountInBox = [];
        // foreach ($boxes as $box){
        //   $cardCountInBox[] = $box->getCardCount();
        // }
        // print_r($cardCountInBox);
        foreach ($boxes as $box){
        ?>
        <div class="col-sm-6 col-md-4 col-lg-2">
          <div class="card">
            <div class="card-body"><span class="badge badge-secondary"> <?php echo $box->getCardCount();  ?> </span>
              <h5 class="card-title"> Box: <?php echo $box->getBoxID() . ' '; ?> </h5>
              <?php
              if ($box->getCardCount() != 0): ?>
              <button type="button" onclick='window.location.href="<?php $_SERVER['PHP_SELF']?>?do=getcard<?php echo "&boxID=". $box->getBoxID();?>"' class="btn btn-outline-success">Show Card</button>
            <?php endif; ?>

            </div>
          </div>
        </div>
        <br>
      <?php }?>
      </div>
    </div>

    <script src="<?php echo $js ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $js ?>jquery-ui.min.js"></script>
    <script src="<?php echo $js ?>bootstrap.min.js"></script>
    <script src="<?php echo $js ?>jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo $js ?>mainjs.js"></script>
  </body>
</html>
