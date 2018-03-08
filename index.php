<!DOCTYPE html>
<?php require_once 'app/loader.php';
use lernkartei\classes\Game;
use lernkartei\classes\Card;
use lernkartei\classes\Box;
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
            <form class="database-setup" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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
                  class ="btn btn-primary btn-block"
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
      <div class="row">
        <?php
        $boxes = $game->getBoxes();
        foreach ($boxes as $box):
        ?>
        <div class="col-sm-4">
          <h5 class="card-title"> Box: <?php echo $box->getBoxID() . ' '; ?>  Count:  <?php echo $box->getCardCount(); ?> </h5>
          <?php foreach ($box->getCards() as $value): ?>
            <div class="card">
            <div class="card-body">
            <p class="card-title"> Card ID: <span class="badge badge-secondary"> <?php echo $value['id']; ?> </span></p>
            <h1 class="card-text"> <?php echo $value['word']; ?> </h1>
            <p class="card-text"> <?php echo $value['word_meaning']; ?> </p> <br>
            <button type="button" onclick='window.location.href="<?php $_SERVER['PHP_SELF']?>?do=notsure&cardID=<?php echo $value['id'] . "&boxID=". $box->getBoxID();?>"' class="btn btn-outline-secondary">Not sure</button>
            <button type="button" onclick='window.location.href="<?php $_SERVER['PHP_SELF']?>?do=move&cardID=<?php echo $value['id'] . "&boxID=". $box->getBoxID();?>"' class="btn btn-outline-success">I got it</button>
            </div>
            <div class="card-footer">
            <small class="text-muted">Created: <?php echo $value['create_date']; ?> </small>
            </div>
            </div>
            <br>
          <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <script src="<?php echo $js ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $js ?>jquery-ui.min.js"></script>
    <script src="<?php echo $js ?>bootstrap.min.js"></script>
    <script src="<?php echo $js ?>jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo $js ?>mainjs.js"></script>
  </body>
</html>
