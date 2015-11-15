<?php
require_once($basePokerGameDir . "CardCollection.php");

class Achievement
{
    /** var string */
    protected$name;

    /** var CardCollection */
    protected $hand;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setHand(CardCollection $hand)
    {
        $this->hand = $hand;
    }

    public function isUnlocked()
    {
        return isset($this->hand);
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