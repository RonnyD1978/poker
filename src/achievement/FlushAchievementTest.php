<?php
$basePokerGameDir = __DIR__ . "/../";

require_once($basePokerGameDir . "/achievement/FlushAchievement.php");
require_once($basePokerGameDir . "CardCollection.php");
require_once($basePokerGameDir . "Card.php");

class FlushAchievementTest extends PHPUnit_Framework_TestCase
{
    public function testThatFlushUnlocks()
    {
        $hand = new CardCollection();

        $card1 = new Card(CardRank::Two, CardSuit::Spades);
        $hand->addCard($card1);

        $card2 = new Card(CardRank::Four, CardSuit::Spades);
        $hand ->addCard($card2);

        $card3 = new Card(CardRank::Six, CardSuit::Spades);
        $hand ->addCard($card3);

        $flush = new FlushAchievement("Flush");
        $flush->setHand($hand);

        $this->assertTrue($flush->isUnlocked());
    }

    public function testThatFlushDoesntUnlockOnTwoDifferentSuits()
    {
        $hand = new CardCollection();

        $card1 = new Card(CardRank::Two, CardSuit::Spades);
        $hand->addCard($card1);

        $card2 = new Card(CardRank::Four, CardSuit::Hearts);
        $hand ->addCard($card2);

        $flush = new FlushAchievement("Flush");
        $flush->setHand($hand);

        $this->assertFalse($flush->isUnlocked());
    }

    public function testThatFlushUnlocksOnASingleCard()
    {
        $hand = new CardCollection();

        $card = new Card(CardRank::Two, CardSuit::Spades);
        $hand->addCard($card);

        $flush = new FlushAchievement("Flush");
        $flush->setHand($hand);

        $this->assertTrue($flush->isUnlocked());
    }
}
