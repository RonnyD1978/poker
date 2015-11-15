<?php
$basePokerGameDir = __DIR__ . "/../";

require_once($basePokerGameDir . "achievement/Achievement.php");
require_once($basePokerGameDir . "CardCollection.php");

class AchievementTest extends PHPUnit_Framework_TestCase
{
    public function testThatAchievementNotUnlocked()
    {
        $achievement = new Achievement("achievement");

        $this->assertEquals("achievement", (string)$achievement);
    }

    public function testThatAchievementUnlocked()
    {
        $achievement = new Achievement("achievement");

        $cards = new CardCollection();
        $achievement->setCards($cards);

        $this->assertEquals("achievement unlocked", (string)$achievement);
    }

}
