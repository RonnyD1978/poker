<?php

class CardRank
{
    const Two = "2";
    const Three = "3";
    const Four = "4";
    const Five = "5";
    const Six = "6";
    const Seven = "7";
    const Eight = "8";
    const Nine = "9";
    const Ten = "T";
    const Jack = "J";
    const Queen = "Q";
    const King = "K";
    const Ace = "A";

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

    public function equalsRank(CardRank $rank)
    {
        return $this->rankValue() == $rank->rankValue();
    }

    public static function orderedRanks()
    {
        return array(
            CardRank::Two,
            CardRank::Three,
            CardRank::Four,
            CardRank::Five,
            CardRank::Six,
            CardRank::Seven,
            CardRank::Eight,
            CardRank::Nine,
            CardRank::Ten,
            CardRank::Jack,
            CardRank::Queen,
            CardRank::King,
            CardRank::Ace
        );
    }
}