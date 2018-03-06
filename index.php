<!DOCTYPE html>
<?php include 'init.php';?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lernkartei</title>
    <link rel="stylesheet" href="<?php echo $css ?>bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $css ?>bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $css ?>main.css" />
  </head>
  <body>
    <div class="fullwidth-container ">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class=" login-page">
          	<h1 class="text-center"> <span class="selected">Create Game</span></h1>
            <form class="database-setup" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="input-container">
                <input
                  class="form-control"
                  type="text"
                  name="player_name"
                  autocomplete="off"
                  placeholder="Player Name"
                  required />
              </div>
              <div class="input-container">
                <input
                  class="form-control"
                  type="text"
                  name="box_count"
                  autocomplete="off"
                  placeholder="How many box?"
                  required />
              </div>
              <div class="input-container">
                <input
                  class ="btn btn-primary btn-block"
                  name = "set_game"
                  type="submit"
                  value="Add" />
              </div>
            </form>
          </div>
        </div>
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

      <?php

      ini_set('display_errors', true);
      ini_set('error_reporting', E_ALL);
      error_reporting(E_ALL);

      $box1 = new Box(1,$dbConnect);
      $box2 = new Box(2,$dbConnect);

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['set_game'])) {
          $player = new Game($dbConnect);
           $player->setPlayerName($_POST['player_name']);
           $player->deleteAllBoxes();
           $player->setNumberOfBoxes($_POST['box_count']);
           }

        if (isset($_POST['add_card'])) {
          $card = new Card();
    	    $card->setWord($_POST['card_word']);
    	    $card->setWordMeaning($_POST['card_word']);
          $box1->add($card);
        }

      }
      ?>
      <h3>Player: {Name}</h3>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h5 class="card-title"> Box: <?php echo $box1->getBoxID(); ?> </h5>
            <?php foreach ($box1->getCards() as $value): ?>
              <div class="card">
              <div class="card-body">
              <p class="card-title"> Card ID: <span class="badge badge-secondary"> <?php echo $value['id']; ?> </span></p>
              <h1 class="card-text"> <?php echo $value['word']; ?> </h1>
              <p class="card-text"> <?php echo $value['word_meaning']; ?> </p> <br>
              <button type="button" class="btn btn-outline-secondary">not sure</button>
              <button type="button" class="btn btn-outline-success">got it</button>
              <button type="button" class="btn btn-outline-danger">remove</button>
              </div>
              <div class="card-footer">
              <small class="text-muted">Created: <?php echo $value['create_date']; ?> </small>
              </div>
              </div>
              <br>
            <?php endforeach; ?>
          </div>

          <div class="col-sm-6">
            <h5 class="card-title"> Box: <?php echo $box2->getBoxID(); ?> </h5>
            <?php foreach ($box2->getCards() as $value): ?>
              <div class="card">
              <div class="card-body">
              <p class="card-title"> Card ID: <span class="badge badge-secondary"> <?php echo $value['id']; ?> </span></p>
              <h1 class="card-text"> <?php echo $value['word']; ?> </h1>
              <p class="card-text"> <?php echo $value['word_meaning']; ?> </p> <br>
              <button type="button" class="btn btn-outline-secondary">not sure</button>
              <button type="button" class="btn btn-outline-success">got it</button>
              <button type="button" class="btn btn-outline-danger">remove</button>
              </div>
              <div class="card-footer">
              <small class="text-muted">Created: <?php echo $value['create_date']; ?> </small>
              </div>
              </div>
              <br>
            <?php endforeach; ?>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-6">
            <h5 class="card-title"> First card: </h5>
            <?php foreach ($box1->getFirstCard() as $value): ?>
              <div class="card">
              <div class="card-body">
              <p class="card-title"> Card ID: <span class="badge badge-secondary"> <?php echo $value['id']; ?> </span></p>
              <h1 class="card-text"> <?php echo $value['word']; ?> </h1>
              <p class="card-text"> <?php echo $value['word_meaning']; ?> </p> <br>
              <button type="button" class="btn btn-outline-secondary">not sure</button>
              <button type="button" class="btn btn-outline-success">got it</button>
              <button type="button" class="btn btn-outline-danger">remove</button>
              </div>
              <div class="card-footer">
              <small class="text-muted">Created: <?php echo $value['create_date']; ?> </small>
              </div>
              </div>
              <br>
            <?php endforeach; ?>
          </div>

        <div class="col-sm-6">
          <h5 class="card-title"> First card: </h5>
          <?php foreach ($box2->getFirstCard() as $value): ?>
            <div class="card">
            <div class="card-body">
            <p class="card-title"> Card ID: <span class="badge badge-secondary"> <?php echo $value['id']; ?> </span></p>
            <h1 class="card-text"> <?php echo $value['word']; ?> </h1>
            <p class="card-text"> <?php echo $value['word_meaning']; ?> </p> <br>
            <button type="button" class="btn btn-outline-secondary">not sure</button>
            <button type="button" class="btn btn-outline-success">got it</button>
            <button type="button" class="btn btn-outline-danger">remove</button>
            </div>
            <div class="card-footer">
            <small class="text-muted">Created: <?php echo $value['create_date']; ?> </small>
            </div>
            </div>
            <br>
          <?php endforeach; ?>
        </div>
        </div>
    </div>
      <!--


      echo '<div class="row">';
      echo '<div class="col-sm-6">';
      echo '<h5 class="card-title"> First card: </h5>';
      foreach ($box1->getFirstCard() as $value) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<p class="card-title"> Card ID: <span class="badge badge-secondary">'. $value['id'] . '</span></p>';
        echo '<h1 class="card-text">' . $value['word'] . "</h1>";
        echo '<p class="card-text">' . $value['word_meaning'] . "</p> <br>";
        echo '<button type="button" class="btn btn-outline-secondary">not sure</button>';
        echo '<button type="button" class="btn btn-outline-success">got it</button>';
        echo '<button type="button" class="btn btn-outline-danger">remove</button>';

        echo '</div>';
        echo '<div class="card-footer">';
        echo '<small class="text-muted">Created: '. $value['create_date'] .'</small>';
        echo '</div>';
        echo '</div>';
        echo '<br>';
      }
      echo '</div>';
 -->


    <script src="<?php echo $js ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $js ?>jquery-ui.min.js"></script>
    <script src="<?php echo $js ?>bootstrap.min.js"></script>
    <script src="<?php echo $js ?>jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo $js ?>mainjs.js"></script>
  </body>
</html>
