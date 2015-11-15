<?php
require_once("CardRank.php");
require_once("CardSuit.php");

class Card
{
    /** @var CardRank */
    private $rank;

    /** @var CardSuit */
    private $suit;

    public function __construct($rank = null, $suit = null)
    {
        $this->rank = new CardRank($rank);
        $this->suit = new CardSuit($suit);
    }

    public function rank()
    {
        return $this->rank;
    }

    public function setRank(CardRank $rank)
    {
        $this->rank = $rank;
    }

    public function suit()
    {
        return $this->suit;
    }

    public function setSuit(CardSuit $suit)
    {
        $this->suit = $suit;
    }

    public function value()
    {
        $value = "";

        if (isset($this->rank))
        {
            $value .= $this->rank->rankValue();
        }

        if (isset($this->suit))
        {
            $value .= $this->suit->suitValue();
        }

        return $value;
    }

    public function equalsCard(Card $card)
    {
        return $card->value() == $this->value();
    }

    public function __toString()
    {
        return $this->value();
    }

}