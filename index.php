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

      $player = new GamePlayer($dbConnect);
      $player->setPlayerName("Ginan");
      $player->deleteAllBoxes();
      $player->setNumberOfBoxes(5);





      $compartment1 = new Box(1,$dbConnect);
      $compartment2 = new Box(2,$dbConnect);
      $compartment3 = new Box(3,$dbConnect);
      $compartment4 = new Box(4,$dbConnect);
      $compartment5 = new Box(5,$dbConnect);

      $card = new Card();
	    $card->setWord('OOP');
	    $card->setWordMeaning('Objektorientierte Programmierung');
      $compartment1->add($card);
      $compartment1->save();
      //$compartment1->remove($card->getID());

      $card = new Card();
	    $card->setWord('OOP');
	    $card->setWordMeaning('Objektorientierte Programmierung');
      $compartment2->add($card);
      $compartment2->save();


      // $compartment3->add($card);
      // $compartment3->save();
      //$compartment->remove($card->getID());
      //unset($compartment);

	    echo '<pre>';
      echo print_r($compartment1, 1);
      echo '</pre>';

      echo '<pre>';
      echo print_r($compartment2, 1);
      echo '</pre>';
      //
      // echo '<pre>';
      // echo print_r($compartment3, 1);
      // echo '</pre>';


      echo '<pre>';
      echo print_r($compartment1->getCards(),1);
      echo '</pre>';

      echo '<pre>';
      echo print_r($compartment2->getCards(),1);
      echo '</pre>';
      //
      // echo '<pre>';
      // echo print_r($compartment3->getCards(),1);
      // echo '</pre>';

    ?>
    <script src="<?php echo $js ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $js ?>jquery-ui.min.js"></script>
    <script src="<?php echo $js ?>bootstrap.min.js"></script>
    <script src="<?php echo $js ?>jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo $js ?>mainjs.js"></script>
  </body>
</html>
