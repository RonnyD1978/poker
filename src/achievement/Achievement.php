<?php
require_once($basePokerGameDir . "CardCollection.php");

class Achievement
{
    /** var string */
    private $name;

    /** var CardCollection */
    private $cards;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setCards(CardCollection $cards)
    {
        $this->cards = $cards;
    }

    public function isUnlocked()
    {
        return isset($this->cards);
    }

    public function __toString()
    {
        $value = $this->name;

        if ($this->isUnlocked())
        {
            $value .= " unlocked";
        }

        return $value;
    }
}