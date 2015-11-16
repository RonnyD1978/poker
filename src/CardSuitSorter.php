<?php
require_once("CardSorter.php");
require_once("CardSuit.php");
require_once("Card.php");

class CardSuitSorter implements CardSorter
{
    public function sort(array $cards)
    {
        $cards = array();

        $suits = CardSuit::orderedSuits();

        foreach($suits as $suit)
        {
            foreach($cards as $card)
            {
                if ($card->suit().equalsSuit($suit))
                {
                    $this->sortedCards->addCard($card);
                }
            }
        }

        return $cards;
    }
}