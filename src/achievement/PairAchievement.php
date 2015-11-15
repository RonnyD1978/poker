<?php
require_once($basePokerGameDir . "achievement/Achievement.php");

class PairAchievement extends Achievement
{
    public function isUnlocked()
    {
        $cards = $this->cards->cards();

        foreach($cards as $card)
        {
            
        }
        return false;
    }
}