<?php
$basePokerGameDir = "../src/";

require_once($basePokerGameDir . "factory/EmptyPokerGameFactory.php");

echo "Running PokerGame from a EmptyPokerGameFactory...";
echo "<br/>";

$pokerGameFactory = new EmptyPokerGameFactory();
$pokerGame = $pokerGameFactory->createPokerGame();

$result = $pokerGame->runAndGetResultFrom(array());

foreach ($result as $player)
{
    echo $player;
    echo "<br/>";
}