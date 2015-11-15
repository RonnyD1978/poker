<?php
$basePokerGameDir = __DIR__ . "/../";

require_once($basePokerGameDir . "/achievement/PairAchievement.php");
require_once($basePokerGameDir . "CardCollection.php");
require_once($basePokerGameDir . "Card.php");

class PairAchievementTest extends PHPUnit_Framework_TestCase
{
    public function testThatPairUnlocks()
    {
        $pair = new PairAchievement("Pair");

        $cards = new CardCollection();

        $card1 = new Card();
        $card1->setSuit(new CardSuit(CardSuit::SuitValueSpades));
        $card1->setRank(new CardRank(CardRank::CardRankValueAce));
        $cards->addCard($card1);

        $card2 = new Card();
        $card2->setSuit(new CardSuit(CardSuit::SuitValueHearts));
        $card2->setRank(new CardRank(CardRank::CardRankValueAce));
        $cards->addCard($card1);

        $pair->setCards($cards);

        $this->assertTrue($pair->isUnlocked());
    }
}
