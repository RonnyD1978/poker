<?php

class CardSuit
{
    const SuitValueSpades = "S";
    const SuitValueHearts = "H";
    const SuitValueDiamonds = "D";
    const SuitValueClubs = "C";

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

    public static function suits()
    {
        return array(CardSuit::SuitValueSpades, CardSuit::SuitValueHearts, CardSuit::SuitValueDiamonds, CardSuit::SuitValueClubs);
    }
}