<?php
require_once("Achievement.php");

class AchievementTest extends PHPUnit_Framework_TestCase
{
    public function testThatAchievementUnlocked()
    {
        $achievement = new Achievement();

        $this->assertTrue($achievement->isUnlocked());
    }
}
