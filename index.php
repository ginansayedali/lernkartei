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

    <?php

	    ini_set('display_errors', true);
	    ini_set('error_reporting', E_ALL);
	    error_reporting(E_ALL);

      // Test Player Class
      // echo strftime("%F %T");
      //
      // $player = new GamePlayer($dbConnect);
      // $player->setPlayerName("Ginan");
      // $player->deleteAllBoxes();
      // $player->setNumberOfBoxes(5);
      // echo '<pre>';
      // echo print_r($player->createBox());
      // echo '</pre>';
      //
      // echo print_r($box1->getBoxID());
      //
      // $player->addBox();
      // $player->removeBox(7);
      //
      // for ($i  = 1; $i <= $player->getNumberOfBoxes(); $i++){
      //   $box = "box{$i}";
      //   $$box = new Box($i,$dbConnect);
      // }
      //
      // $card = new Card();
	    // $card->setWord('OOP');
	    // $card->setWordMeaning('Objektorientierte Programmierung');
      // $box1->add($card);
      // $box1->save();
      //
      // $box1->remove($card->getID());
      //
      // $card = new Card();
	    // $card->setWord('OOP');
	    // $card->setWordMeaning('Objektorientierte Programmierung');
      // $box2->add($card);
      // $box2->save();
      //
      // $compartment3->add($card);
      // $compartment3->save();
      // $compartment->remove($card->getID());
      // unset($compartment);
      //
      $compartment1 = new Box(1,$dbConnect);
      $compartment2 = new Box(2,$dbConnect);
      //
      // $card = new Card();
	    // $card->setWord('OOP');
	    // $card->setWordMeaning('Objektorientierte Programmierung');
      // $compartment1->add($card);
      // $compartment1->save();
      // $compartment1->remove(311);
      //
      // $card = new Card();
	    // $card->setWord('OOP');
	    // $card->setWordMeaning('Objektorientierte Programmierung');
      // $compartment2->add($card);
      // $compartment2->save();
      //
	    // echo '<pre>';
      // echo print_r($compartment1, 1);
      // echo '</pre>';
      //
      // echo '<pre>';
      // echo print_r($compartment2, 1);
      // echo '</pre>';
      //
      echo '<div style="float: left; margin: 5%;">';
      echo '<h3> Box Number: ' . $compartment1->getBoxID() . '</h3>';
      foreach ($compartment1->getCards() as $value) {
        echo  "<p>ID: " . $value['id'] . "</p>";
        echo  "<p>Created date: " . $value['create_date'] . "</p>";
        echo  "<p>Word: " . $value['word'] . "</p>";
        echo  "<p>Meaning: " . $value['word_meaning'] . "</p> <br>";
      }

      echo '<h3> First Card </h3>';
      foreach ($compartment1->getFirstCard() as $value) {
        echo  "<p>ID: " . $value['id'] . "</p>";
        echo  "<p>Created date: " . $value['create_date'] . "</p>";
        echo  "<p>Word: " . $value['word'] . "</p>";
        echo  "<p>Meaning: " . $value['word_meaning'] . "</p> <br>";
      }
      echo '</div>';

      echo '<div style="float: left; margin: 5%;">';
      echo '<h3> Box Number: ' . $compartment2->getBoxID() . '</h3>';
      foreach ($compartment2->getCards() as $value) {
        echo  "<p>ID: " . $value['id'] . "</p>";
        echo  "<p>Created date: " . $value['create_date'] . "</p>";
        echo  "<p>Word: " . $value['word'] . "</p>";
        echo  "<p>Meaning: " . $value['word_meaning'] . "</p> <br>";
      }

      echo '<h3> First Card </h3>';
      foreach ($compartment2->getFirstCard() as $value) {
        echo  "<p>ID: " . $value['id'] . "</p>";
        echo  "<p>Created date: " . $value['create_date'] . "</p>";
        echo  "<p>Word: " . $value['word'] . "</p>";
        echo  "<p>Meaning: " . $value['word_meaning'] . "</p> <br>";
      }
      echo '</div>';

      // echo '<pre>';
      // echo print_r($compartment1->getCards(),1);
      // echo '</pre>';
      //
      // echo '<pre>';
      // echo print_r($compartment2->getCards(),1);
      // echo '</pre>';

    ?>
    <script src="<?php echo $js ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $js ?>jquery-ui.min.js"></script>
    <script src="<?php echo $js ?>bootstrap.min.js"></script>
    <script src="<?php echo $js ?>jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo $js ?>mainjs.js"></script>
  </body>
</html>
