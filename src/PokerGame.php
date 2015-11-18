<?php
require_once("CardDeck.php");
require_once("achievement/Achievement.php");
require_once("PokerPlayer.php");

class PokerGame
{
    /** @var CardDeck */
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

    public function startDeWagen(array $players)
    {
        $this->resetCards($players);

        $this->resetAchievements($players);

        $this->dealCards($players);

        $this->checkCards($players);
    }

    private function resetCards(array $players)
    {
        foreach ($players as $player)
        {
            $player->resetCards();
        }
    }

    private function resetAchievements(array $players)
    {
        foreach ($players as $player)
        {
            $player->resetAchievementUnlocked();
        }
    }

    private function dealCards(array $players)
    {
        foreach ($players as $player)
        {
            for($i = 0; $i < $this->getNumberOfCardsPerPlayer(); $i++)
            {
                $player->addCard($this->cardDeck->randomCard());
            }
        }
    }

    private function getNumberOfCardsPerPlayer()
    {
        return 5;
    }

    private function checkCards(array $players)
    {
        foreach ($players as $player)
        {
            $this->checkCardsForPlayer($player);
        }
    }

    private function checkCardsForPlayer(PokerPlayer $player)
    {
        foreach ($this->achievements as $achievement)
        {
            $achievement->setHand($player->hand());

            if ($achievement->isUnlocked())
            {
                $player->setAchievementUnlocked($achievement);
            }
        }
    }
}