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

        $card3 = new Card(CardRank::Four, CardSuit::Spades);
        $hand ->addCard($card3);

        $card3 = new Card(CardRank::Six, CardSuit::Spades);
        $hand ->addCard($card3);

        $flush = new FLushAchievement("Flush");
        $flush->setHand($hand);

        $this->assertTrue($flush->isUnlocked());
    }
}
