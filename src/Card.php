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
        if (is_string($rank))
        {
            $rank = new CardRank($rank);
        }

        if (is_string($suit))
        {
            $suit = new CardSuit($suit);
        }

        $this->rank = $rank;
        $this->suit = $suit;
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
        return $this->rank->equalsRank($card->rank()) && $this->suit->equalsSuit($card->suit());
    }

    public function __toString()
    {
        return $this->value();
    }

}