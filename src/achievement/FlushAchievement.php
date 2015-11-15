<?php
require_once($basePokerGameDir . "achievement/Achievement.php");

class FlushAchievement extends Achievement
{
    public function isUnlocked()
    {
        $cards = new CardCollectionSortedBySuit($this->hand->cards());

        $lowestSuit = $cards->getLowestSuit();
        $highestSuit = $cards->getHighestSuit();

        return $lowestSuit->equalsSuit($highestSuit);
    }
}