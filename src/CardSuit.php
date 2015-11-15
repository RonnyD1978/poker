<?php

class CardSuit
{
    const Spades = "S";
    const Hearts = "H";
    const Diamonds = "D";
    const Clubs = "C";

    /** @var string */
    private $suitValue;

    public function __construct($suitValue)
    {
        $this->suitValue = $suitValue;
    }

    public function suitValue()
    {
        return $this->suitValue;
    }

    public function equalsSuit(CardSuit $suit)
    {
        return $this->suitValue() == $suit->suitValue();
    }

    public static function suits()
    {
        return array(CardSuit::Spades, CardSuit::Hearts, CardSuit::Diamonds, CardSuit::Clubs);
    }
}