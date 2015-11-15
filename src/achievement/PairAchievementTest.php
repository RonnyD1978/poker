<?php
$basePokerGameDir = __DIR__ . "/../";

require_once($basePokerGameDir . "/achievement/PairAchievement.php");
require_once($basePokerGameDir . "CardCollection.php");
require_once($basePokerGameDir . "Card.php");

class PairAchievementTest extends PHPUnit_Framework_TestCase
{
    public function testThatPairUnlocks()
    {
        $cards = new CardCollection();

        $card1 = new Card(CardRank::Ace, CardSuit::Spades);
        $cards->addCard($card1);

        $card2 = new Card(CardRank::Ace, CardSuit::Hearts);
        $cards->addCard($card2);

        $pair = new PairAchievement("Pair");
        $pair->setCards($cards);

        $this->assertTrue($pair->isUnlocked());
    }
}
