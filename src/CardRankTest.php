<?php
require_once("CardRank.php");

class CardRankTest extends PHPUnit_Framework_TestCase
{
    public function testThatRankTwoEqualsRankTwo()
    {
        $two  = new CardRank(CardRank::Two);
        $two2 = new CardRank(CardRank::Two);

        $this->assertEquals($two, $two2);
    }

    public function testThatRankTwoDoesntEqualRankThree()
    {
        $two = new CardRank(CardRank::Two);
        $three = new CardRank(CardRank::Three);

        $this->assertNotEquals($two, $three);
    }
}
