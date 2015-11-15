<?php
require_once("CardCollection.php");

class SortedCardCollection extends CardCollection
{
    public function addCard(Card $card)
    {
        super::addCard($card);

        $this->order();
    }

    public function sort()
    {
    }

    public function getLowestCard($offset = 0)
    {
        return null;
    }

    public function getHighestCard($offset = 0)
    {

    }
}