<?php
require_once("CardSorterInterface.php");
require_once("CardSuit.php");
require_once("Card.php");

class CardSuitSorter implements CardSorterInterface
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