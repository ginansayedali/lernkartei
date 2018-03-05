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

      // echo strftime("%F %T");

      $player = new GamePlayer($dbConnect);
      $player->setPlayerName("Ginan");
      $player->deleteAllBoxes();
      $player->setNumberOfBoxes(5);
      $player->addBox();
      $player->addBox();
      // $player->createBox();

      for ($i  = 1; $i <= $player->getNumberOfBoxes(); $i++){
        $box = "box{$i}";
        $$box = new Box($i,$dbConnect);
      }


      $card = new Card();
	    $card->setWord('OOP');
	    $card->setWordMeaning('Objektorientierte Programmierung');
      $box1->add($card);
      $box1->save();
      //$box1->remove($card->getID());

      $card = new Card();
	    $card->setWord('OOP');
	    $card->setWordMeaning('Objektorientierte Programmierung');
      $box2->add($card);
      $box2->save();


      // $compartment3->add($card);
      // $compartment3->save();
      //$compartment->remove($card->getID());
      //unset($compartment);

	    echo '<pre>';
      echo print_r($box1, 1);
      echo '</pre>';

      echo '<pre>';
      echo print_r($box2, 1);
      echo '</pre>';

      echo '<pre>';
      echo print_r($box1->getCards(),1);
      echo '</pre>';

      echo '<pre>';
      echo print_r($box2->getCards(),1);
      echo '</pre>';


    ?>
    <script src="<?php echo $js ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $js ?>jquery-ui.min.js"></script>
    <script src="<?php echo $js ?>bootstrap.min.js"></script>
    <script src="<?php echo $js ?>jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo $js ?>mainjs.js"></script>
  </body>
</html>
