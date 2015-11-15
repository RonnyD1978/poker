<?php
require_once("CardCollection.php");
require_once("Card.php");
require_once("CardSuit.php");
require_once("CardRank.php");

class CardCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testThatOneCardCollectionDisplaysCorrectValue()
    {
        $cardCollection = new CardCollection();

        $card = new Card(CardRank::Ace, CardSuit::Spades);
        $cardCollection->addCard($card);

        $this->assertEquals("AS", (string)$cardCollection);
    }

    public function testThatTwoCardCollectionDisplaysCorrectValue()
    {
        $cardCollection = new CardCollection();

        $card1 = new Card(CardRank::Ace, CardSuit::Spades);
        $cardCollection->addCard($card1);

        $card2 = new Card(CardRank::Two, CardSuit::Hearts);
        $cardCollection->addCard($card2);

        $this->assertEquals("AS 2H", (string)$cardCollection);
    }

    public function testThatYouCantAddTwoSameCards()
    {
        $cardCollection = new CardCollection();

        $card1 = new Card(CardRank::Ace, CardSuit::Spades);
        $cardCollection->addCard($card1);

        $card2 = new Card(CardRank::Ace, CardSuit::Spades);
        $cardCollection->addCard($card2);

        $this->assertEquals("AS", (string)$cardCollection);
    }

    public function testThatRemovedCardIsActuallyRemoved()
    {
        $cardCollection = new CardCollection();

        $card1 = new Card(CardRank::Ace, CardSuit::Spades);
        $cardCollection->addCard($card1);

        $card2 = new Card(CardRank::Two, CardSuit::Hearts);
        $cardCollection->addCard($card2);

        $cardCollection->removeCard($card1);

        $this->assertEquals("2H", (string)$cardCollection);
    }

    public function testThatCardsAreCheckedWhenAdded()
    {
        //TODO: mock CardCollection
        $cardCollection = new CardCollection();

        $card1 = new Card(CardRank::Ace, CardSuit::Spades);
        $cardCollection->addCard($card1);

        //verify that hasCard is invoked
    }
}