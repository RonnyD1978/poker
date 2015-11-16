<?php
require_once("Card.php");

class CardCollection
{
    /** @var array */
    protected $cards;

    public function __construct()
    {
        $this->cards = array();
    }

    public function addCard(Card $card)
    {
        if (!$this->hasCard($card))
        {
            $this->cards[] = $card;
        }
    }

    public function removeCard(Card $removeCard)
    {
        $newCards = array();

        foreach ($this->cards as $card)
        {
            if (!$removeCard->equalsCard($card))
            {
                $newCards[] = $card;
            }
        }

        $this->cards = $newCards;
    }

    private function hasCard(Card $checkCard)
    {
        foreach ($this->cards as $card)
        {
            if ($checkCard->equalsCard($card))
            {
                return true;
            }
        }

        return false;
    }

    public function numberOfCards()
    {
        return sizeof($this->cards);
    }

    public function cards()
    {
        return $this->cards;
    }

    public function cardAtIndex($index)
    {
        return isset($this->cards[$index]) ? $this->cards[$index] : null;
    }

    public function firstCard()
    {
        return $this->cardAtIndex(0);
    }

    public function lastCard()
    {
        return $this->cardAtIndex($this->numberOfCards());
    }

    public function sortBy(CardSorter $sorter)
    {
        $this->cards = $sorter->sort($this->cards);
    }

    public function __toString()
    {
        $cardValues = array();

        foreach ($this->cards as $card)
        {
            $cardValues[] = (string)$card;
        }

        return implode(" ", $cardValues);
    }
}