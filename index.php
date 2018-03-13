<!DOCTYPE html>
<?php
require_once 'vendor/autoload.php';
require_once 'app/lernkartei/init/connect.php';
require_once 'app/lernkartei/init/routes.php';

use lernkartei\classes\Game;
use lernkartei\classes\Card;
use lernkartei\classes\Box;
use lernkartei\classes\DBqueries;
use lernkartei\classes\TextCard;
use lernkartei\classes\ImageCard;
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
                  name="question"
                  autocomplete="off"
                  placeholder="Question"
                  required />
              </div>
              <div class="input-container">
                <input
                  class="form-control"
                  type="text"
                  name="answer"
                  autocomplete="off"
                  placeholder="Answer"
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
    $DBquery = new DBqueries($dbConnect);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['add_card'])) {
        $box = new Box();
        $box->setBoxID(1);
        $card = new TextCard();
  	    $card->setQuestion($_POST['question']);
  	    $card->setAnswer($_POST['answer']);
        $box->add($card);
        $DBquery->queryAddCardToBox($card, 1);
      }
    }
    ?>
    <div class="container">
      <div class="row min-height">
        <div class="col-sm-12 col-md-12 col-lg-6">
    <?php
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
      } elseif ($do == 'getcard'){
        $boxID = isset($_GET['boxID']) && is_numeric($_GET['boxID']) ? intval($_GET['boxID']) : 0;
        $box = new Box();
        $box->setBoxID($boxID);
        $card = $DBquery->queryGetFirstCard($boxID);
      }
        if (isset($card)){ ?>
          <div class="card">
            <div class="card-body card-js">
              <p class="badge badge-secondary">Created on: <?php echo $card[0]["created_date"]  ?> </p>
              <p class="card-title text-center">
               <?php echo '<h1 class="text-center">'.$card[0]["question"]. '</h1>' ?>
               <span  class="showanswer btn btn-outline-secondary"> show</span>
              </p>
              <div class="show-answer hidden-class">
                <h1 class="card-text">
                  <?php echo $card[0]["answer"] ?>
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
        <?php } } ?>
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
          <?php
          $cardsCount = $DBquery->queryGetAllCardsCount();
          $learnedCardsCount = $DBquery->queryGetLearnedCardsCount();
          $sumOfCards = $cardsCount + $learnedCardsCount;
          ?>
          <div class="progress-bar" role="progressbar" style="width: <?php echo ($learnedCardsCount / $sumOfCards) * 100 ?>%;" aria-valuenow="<?php echo $learnedCardsCount ?>" aria-valuemin="<?php echo $cardsCount ?>" aria-valuemax="<?php echo $sumOfCards ?>"><?php echo $learnedCardsCount ?> von <?php echo $sumOfCards  ?> </div>
        </div>
      </div>
      </div>
      <br />
      <div class="row">
        <?php
        $boxes = $game->getBoxes();
        print_r($boxes);
        foreach ($boxes as $box){
        ?>
        <div class="col-sm-6 col-md-4 col-lg-2">
          <div class="card">
            <div class="card-body"><span class="badge badge-secondary"> <?php echo $DBquery->queryGetCardCount($box->getBoxID());  ?> </span>
              <h5 class="card-title"> Box: <?php echo $box->getBoxID() . ' '; ?> </h5>
              <?php
              if ($DBquery->queryGetCardCount($box->getBoxID()) != 0): ?>
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
