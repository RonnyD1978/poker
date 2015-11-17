<?php
require_once($basePokerGameDir . "factory/PokerGameFactory.php");
require_once($basePokerGameDir . "Card.php");
require_once($basePokerGameDir . "CardDeck.php");
require_once($basePokerGameDir . "CardSuit.php");
require_once($basePokerGameDir . "CardRank.php");
require_once($basePokerGameDir . "achievement/FlushAchievement.php");
require_once($basePokerGameDir . "achievement/PairAchievement.php");

class TexasHoldEmPokerGameFactory implements PokerGameFactory
{
    public function createPokerGame()
    {
        $pokerGame = new PokerGame();

        $pokerGame->setCardDeck($this->createCardDeck());
        $pokerGame->setAchievements($this->createAchievements());

        return $pokerGame;
    }

    public function createCardDeck()
    {
        $cardDeck = new CardDeck();

        $suits = CardSuit::orderedSuits();
        $ranks = CardRank::orderedRanks();

        foreach ($ranks as $rank)
        {
            foreach ($suits as $suit)
            {
                $card = new Card($rank, $suit);

                $cardDeck->addCard($card);

                //TODO: remove
                break;

            }
        }

        return $cardDeck;
    }

    public function createAchievements()
    {
        $achievements = array();
        $achievements[] = new FlushAchievement("Flush");
        $achievements[] = new PairAchievement("Pair");

        return $achievements;
    }
}