<?php
require_once("Card.php");

class CardTest extends PHPUnit_Framework_TestCase
{
    public function testThatRankingWithSpadesSuitIsCorrect()
    {
        $card = new Card();
        $card->setRank(new CardRank(CardRank::CardRankValueTen));
        $card->setSuit(new CardSuit(CardSuit::SuitValueSpades));

        $this->assertEquals("TS", $card->value());
    }

    public function testThatRankingWithHeartsSuitIsCorrect()
    {
        $card = new Card();
        $card->setRank(new CardRank(CardRank::CardRankValueTen));
        $card->setSuit(new CardSuit(CardSuit::SuitValueHearts));

        $this->assertEquals("TH", $card->value());
    }

    public function testThatRankingWithDiamondsSuitIsCorrect()
    {
        $card = new Card();
        $card->setRank(new CardRank(CardRank::CardRankValueTen));
        $card->setSuit(new CardSuit(CardSuit::SuitValueDiamonds));

        $this->assertEquals("TD", $card->value());
    }

    public function testThatRankingWithClubsSuitIsCorrect()
    {
        $card = new Card();
        $card->setRank(new CardRank(CardRank::CardRankValueTen));
        $card->setSuit(new CardSuit(CardSuit::SuitValueClubs));

        $this->assertEquals("TC", $card->value());
    }

    public function testIfBlankCardDoesntCrash()
    {
        $card = new Card();
        $this->assertEquals("", $card->value());
    }

    public function testThatTwoCardsAreTheSame()
    {
        $card1 = new Card();
        $card1->setRank(new CardRank(CardRank::CardRankValueTen));
        $card1->setSuit(new CardSuit(CardSuit::SuitValueClubs));

        $card2 = new Card();
        $card2->setRank(new CardRank(CardRank::CardRankValueTen));
        $card2->setSuit(new CardSuit(CardSuit::SuitValueClubs));

        $this->assertTrue($card1->equalsCard($card2));
    }

    public function testThatTwoCardsOfDifferentSuitsAreNotTheSame()
    {
        $card1 = new Card();
        $card1->setRank(new CardRank(CardRank::CardRankValueTen));
        $card1->setSuit(new CardSuit(CardSuit::SuitValueClubs));

        $card2 = new Card();
        $card2->setRank(new CardRank(CardRank::CardRankValueTen));
        $card2->setSuit(new CardSuit(CardSuit::SuitValueHearts));

        $this->assertFalse($card1->equalsCard($card2));
    }

    public function testThatTwoCardsOfDifferentRanksAreNotTheSame()
    {
        $card1 = new Card();
        $card1->setRank(new CardRank(CardRank::CardRankValueTwo));
        $card1->setSuit(new CardSuit(CardSuit::SuitValueClubs));

        $card2 = new Card();
        $card2->setRank(new CardRank(CardRank::CardRankValueThree));
        $card2->setSuit(new CardSuit(CardSuit::SuitValueClubs));

        $this->assertFalse($card1->equalsCard($card2));
    }
}
