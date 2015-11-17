<?php
require_once("CardCollection.php");

class CardDeck extends CardCollection
{
    public function randomCard()
    {
        return $this->cardAtIndex(array_rand($this->cards()));
    }
}