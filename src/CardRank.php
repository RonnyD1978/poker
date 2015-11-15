<?php

class CardRank
{
    const CardRankValueTwo = "2";
    const CardRankValueThree = "3";
    const CardRankValueFour = "4";
    const CardRankValueFive = "5";
    const CardRankValueSix = "6";
    const CardRankValueSeven = "7";
    const CardRankValueEight = "8";
    const CardRankValueNine = "9";
    const CardRankValueTen = "T";
    const CardRankValueJack = "J";
    const CardRankValueQueen = "Q";
    const CardRankValueKing = "K";
    const CardRankValueAce = "A";

    /** @var string */
    private $rankValue;

    public function __construct($rankValue)
    {
        $this->rankValue = $rankValue;
    }

    public function rankValue()
    {
        return $this->rankValue;
    }

    public static function orderedRanks()
    {
        return array(
            CardRank::CardRankValueTwo,
            CardRank::CardRankValueThree,
            CardRank::CardRankValueFour,
            CardRank::CardRankValueFive,
            CardRank::CardRankValueSix,
            CardRank::CardRankValueSeven,
            CardRank::CardRankValueEight,
            CardRank::CardRankValueNine,
            CardRank::CardRankValueTen,
            CardRank::CardRankValueJack,
            CardRank::CardRankValueQueen,
            CardRank::CardRankValueKing,
            CardRank::CardRankValueAce
        );
    }
}