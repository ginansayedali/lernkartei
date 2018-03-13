<?php
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
require_once 'app/lernkartei/init/connect.php';
require_once 'app/lernkartei/init/routes.php';

use lernkartei\classes\Game;
use lernkartei\classes\Card;
use lernkartei\classes\Box;
use lernkartei\classes\DBqueries;
use lernkartei\classes\TextCard;
use lernkartei\classes\ImageCard;

$game = new Game($dbConnect);
$DBquery = new DBqueries($dbConnect);
$boxes = $game->getBoxes();


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
}


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

echo $twig->render('homepage.php', array('boxes' => $boxes ,
  'routes' => array('css' => $css, 'js' => $js), 'dbConnect' =>array('dbcon'=> $dbConnect), 'php' => array('self' => $_SERVER['PHP_SELF'])
));
