<?php
$basePokerGameDir = __DIR__ . "/../";

require_once($basePokerGameDir . "/achievement/PairAchievement.php");
require_once($basePokerGameDir . "CardCollection.php");
require_once($basePokerGameDir . "Card.php");

class PairAchievementTest extends PHPUnit_Framework_TestCase
{
    public function testThatPairUnlocks()
    {
        $hand = new CardCollection();

        $card1 = new Card(CardRank::Ace, CardSuit::Spades);
        $hand->addCard($card1);

        $card2 = new Card(CardRank::Ace, CardSuit::Hearts);
        $hand ->addCard($card2);

        $pair = new PairAchievement("Pair");
        $pair->setHand($hand);

        $this->assertFalse($pair->isUnlocked());
    }
}
