<?php
require_once($basePokerGameDir . "factory/PokerGameFactory.php");

class EmptyPokerGameFactory implements PokerGameFactory
{
    public function createPokerGame()
    {
        $pokerGame = new PokerGame();

        return $pokerGame;
    }
}