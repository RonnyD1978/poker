<?php
require_once("CardSuit.php");

class CardSuitTest extends PHPUnit_Framework_TestCase
{
    public function testThatSuitClubsEqualsSuitClubs()
    {
        $clubs = new CardSuit(CardSuit::Clubs);
        $clubs2 = new CardSuit(CardSuit::Clubs);

        $this->assertEquals($clubs, $clubs2);
    }

    public function testThatSuitClubsDoesntEqualSuitHearts()
    {
        $clubs  = new CardSuit(CardSuit::Clubs);
        $hearts = new CardSuit(CardSuit::Hearts);

        $this->assertNotEquals($clubs, $hearts);
    }
}
