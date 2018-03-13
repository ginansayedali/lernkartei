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
$dbQuery = new DBqueries($dbConnect);
$boxes = $game->getBoxes();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['add_card'])) {
    $box = new Box();
    $box->setBoxID(1);
    $card = new TextCard();
    $card->setQuestion($_POST['question']);
    $card->setAnswer($_POST['answer']);
    $box->add($card);
    $dbQuery->queryAddCardToBox($card, 1);
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
    $firstCard = $dbQuery->queryGetFirstCard($boxID);
  }
}

$box = isset($box) ? $box : 0;
$firstCard = isset($firstCard) ? $firstCard : 0;

$cardsCount = $dbQuery->queryGetAllCardsCount();
$learnedCardsCount = $dbQuery->queryGetLearnedCardsCount();
$sumOfCards = $cardsCount + $learnedCardsCount;

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

echo $twig->render('Game.php', array(
  'box'       => $box,
  'boxes'     => $boxes,
  'firstCard' => $firstCard,
  'cardCount' => $cardsCount,
  'learnedCardsCount' => $learnedCardsCount,
  'sumOfCards' => $sumOfCards,
  'routes'    => array('css' => $css, 'js' => $js),
  'dbQuery'   => $dbQuery,
  'php'       => array('self' => $_SERVER['PHP_SELF'])
));
