<?php
require_once("Card.php");
require_once("CardCollection.php");

class PokerPlayer
{
    /** @var string */
    private $name;

    /** @var CardCollection */
    private $hand;

    public function __construct($name)
    {
        $this->name = $name;
        $this->cards = array();
    }

    public function name()
    {
        return $this->name;
    }

    public function cards()
    {
        return $this->cards;
    }

    public function addCard(Card $card)
    {
        $this->cards[] = $card;
    }

    public function __toString()
    {
        return $this->name;
    }
}