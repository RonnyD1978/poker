<?php
require_once($basePokerGameDir . "achievement/Achievement.php");
require_once($basePokerGameDir . "CardSuitSorter.php");

class FlushAchievement extends Achievement
{
    public function isUnlocked()
    {
        $sorter = new CardSuitSorter();

        $this->hand->sortBy($sorter);

        $firstCard = $this->hand->firstCard();
        $lastCard = $this->hand->lastCard();

        if (isset($firstCard) && isset($lastCard))
        {
            return $firstCard->suit()->equalsSuit($lastCard->suit());
        }

        return false;
    }
}