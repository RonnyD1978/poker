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

    public static function orderedSuits()
    {
        return array(
            new CardSuit(CardSuit::Spades),
            new CardSuit(CardSuit::Hearts),
            new CardSuit(CardSuit::Diamonds),
            new CardSuit(CardSuit::Clubs)
        );
    }
}