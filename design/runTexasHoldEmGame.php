<?php
$basePokerGameDir = "../src/";
require_once($basePokerGameDir . "factory/TexasHoldEmPokerGameFactory.php");
require_once($basePokerGameDir . "PokerPlayer.php");

echo "Running PokerGame from a TexasHoldEmPokerGameFactory...";
echo "<br/>";

$pokerGameFactory = new TexasHoldEmPokerGameFactory();
$pokerGame = $pokerGameFactory->createPokerGame();

$playerOne = new PokerPlayer("Black");
$playerTwo = new PokerPlayer("White");
$players = array($playerOne, $playerTwo);

$pokerGame->startDeWagen($players);

foreach ($players as $player)
{
    echo $player;
    echo "<br/>";
}