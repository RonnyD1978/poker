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

        $this->assertEquals(sizeof($cards), 52);
    }

    public function testThatSpadesSuitCardsAreCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $spadesSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::SuitValueSpades)
            {
                $spadesSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(sizeof($spadesSuit), 13);
    }

    public function testThatHeartsSuitCardsAreCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $heartsSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::SuitValueHearts)
            {
                $heartsSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(sizeof($heartsSuit), 13);
    }

    public function testThatDiamondsSuitCardsAreaCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $diamondsSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::SuitValueDiamonds)
            {
                $diamondsSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(sizeof($diamondsSuit), 13);
    }

    public function testThatClubsSuitCardsAreCreated()
    {
        $texasHoldEmFactory = new TexasHoldEmPokerGameFactory();

        $cardDeck = $texasHoldEmFactory->createCardDeck();
        $cards = $cardDeck->cards();

        $clubsSuit = array();

        foreach ($cards as $card)
        {
            if ($card->suit()->suitValue() == CardSuit::SuitValueClubs)
            {
                $clubsSuit[$card->value()] = $card;
            }
        }

        $this->assertEquals(sizeof($clubsSuit), 13);
    }
}
