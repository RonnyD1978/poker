<?php
$basePokerGameDir = __DIR__ . "/../";
require_once("TexasHoldEmPokerGameFactory.php");

class TexasHoldEmPokerGameFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testThatAllCardsAreCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $this->assertEquals(52, sizeof($cards));
    }

    public function testThatSpadesSuitCardsAreCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $spadesSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::Spades)
            {
                $spadesSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(13, sizeof($spadesSuit));
    }

    public function testThatHeartsSuitCardsAreCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $heartsSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::Hearts)
            {
                $heartsSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(13, sizeof($heartsSuit));
    }

    public function testThatDiamondsSuitCardsAreaCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $diamondsSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::Diamonds)
            {
                $diamondsSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(13, sizeof($diamondsSuit));
    }

    public function testThatClubsSuitCardsAreCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $clubsSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::Clubs)
            {
                $clubsSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(13, sizeof($clubsSuit));
    }
}
