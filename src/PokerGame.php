<?php
require_once("CardDeck.php");
require_once("Achievement.php");
require_once("PokerPlayer.php");

class PokerGame
{
    /** @var CardCollection */
    private $cardDeck;

    /** @var array */
    private $achievements;

    public function __construct(array $options = null)
    {
    }

    public function setCardDeck(CardCollection $cardDeck)
    {
        $this->cardDeck = $cardDeck;
    }

    public function setAchievements(array $achievements)
    {
        $this->achievements = $achievements;
    }

    public function runAndGetResultFrom(array $players)
    {
        $this->dealCards($players);

        $orderedPlayers = $this->compareCards($players);

        return $orderedPlayers;
    }

    private function dealCards(array $players)
    {
        foreach($players as $player)
        {
//            $player->addCard($cardDeck->takeCard($this->numberOfInitialCards());
        }
    }

    private function compareCards(array $players)
    {
        $orderedPlayers = $players;

        return $orderedPlayers;
    }
}