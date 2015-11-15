<?php
require_once($basePokerGameDir . "PokerGame.php");

interface PokerGameFactory
{
    public function createPokerGame();
}