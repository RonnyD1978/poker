<?php
require_once($basePokerGameDir . "factory/PokerGameFactory.php");
require_once($basePokerGameDir . "Card.php");
require_once($basePokerGameDir . "CardDeck.php");
require_once($basePokerGameDir . "CardSuit.php");
require_once($basePokerGameDir . "CardRank.php");

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

        $cards = array();
        $suits = CardSuit::suits();
        $ranks = CardRank::orderedRanks();

        foreach ($suits as $suit)
        {
            foreach ($ranks as $rank)
            {
                $card = new Card();
                $card->setSuit(new CardSuit($suit));
                $card->setRank(new CardRank($rank));

                $cardDeck->addCard($card);
            }
        }

        return $cardDeck;
    }

    public function createAchievements()
    {
        return array();
    }
}