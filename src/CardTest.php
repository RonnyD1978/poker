<?php
require_once("Card.php");

class CardTest extends PHPUnit_Framework_TestCase
{
    public function testThatRankingWithSpadesSuitIsCorrect()
    {
        $card = new Card(CardRank::Ten, CardSuit::Spades);

        $this->assertEquals("TS", $card->value());
    }

    public function testThatRankingWithHeartsSuitIsCorrect()
    {
        $card = new Card(CardRank::Ten, CardSuit::Hearts);

        $this->assertEquals("TH", $card->value());
    }

    public function testThatRankingWithDiamondsSuitIsCorrect()
    {
        $card = new Card(CardRank::Ten, CardSuit::Diamonds);

        $this->assertEquals("TD", $card->value());
    }

    public function testThatRankingWithClubsSuitIsCorrect()
    {
        $card = new Card(CardRank::Ten, CardSuit::Clubs);

        $this->assertEquals("TC", $card->value());
    }

    public function testIfBlankCardDoesntCrash()
    {
        $card = new Card();
        $this->assertEquals("", $card->value());
    }

    public function testThatTwoCardsAreTheSame()
    {
        $card1 = new Card(CardRank::Ten, CardSuit::Clubs);
        $card2 = new Card(CardRank::Ten, CardSuit::Clubs);

        $this->assertTrue($card1->equalsCard($card2));
    }

    public function testThatTwoCardsOfDifferentSuitsAreNotTheSame()
    {
        $card1 = new Card(CardRank::Ten, CardSuit::Clubs);
        $card2 = new Card(CardRank::Ten, CardSuit::Hearts);

        $this->assertFalse($card1->equalsCard($card2));
    }

    public function testThatTwoCardsOfDifferentRanksAreNotTheSame()
    {
        $card1 = new Card(CardRank::Two, CardSuit::Clubs);
        $card2 = new Card(CardRank::Three, CardSuit::Clubs);

        $this->assertFalse($card1->equalsCard($card2));
    }
}
