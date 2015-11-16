<?php
require_once($basePokerGameDir . "achievement/Achievement.php");
require_once($basePokerGameDir . "CardSuitSorter.php");

class FlushAchievement extends Achievement
{
    public function isUnlocked()
    {
        $sorter = new CardSuitSorter();
        $this->hand->sortBy($sorter);

        $lowestSuit = $this->hand->firstCard();
        $highestSuit = $this->hand->lastCard();

        if (isset($lowestSuit) && isset($highestSuit))
        {
            return $lowestSuit->equalsSuit($highestSuit);
        }

        return false;
    }
}