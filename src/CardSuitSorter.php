<?php
require_once("CardSorter.php");
require_once("CardSuit.php");
require_once("Card.php");

class CardSuitSorter implements CardSorter
{
    public function sort(array $cards)
    {
        $sortedCards = array();

        $suits = CardSuit::orderedSuits();

        foreach($suits as $suit)
        {
            foreach($cards as $card)
            {
                if ($suit->equalsSuit($card->suit()))
                {
                    $sortedCards[] = $card;
                }
            }
        }

        return $sortedCards;
    }
}