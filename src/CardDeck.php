<?php
require_once("CardCollection.php");

class CardDeck extends CardCollection
{
    public function getRandomCard()
    {
        return array_rand($this->cards());
    }
}