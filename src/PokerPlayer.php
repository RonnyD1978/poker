<?php
require_once("Card.php");
require_once("CardCollection.php");
require_once("achievement/Achievement.php");

class PokerPlayer
{
    /** @var string */
    private $name;

    /** @var CardCollection */
    private $hand;

    /** @var Achievement */
    private $achievementUnlocked;

    public function __construct($name)
    {
        $this->name = $name;
        $this->hand = new CardCollection();
    }

    public function name()
    {
        return $this->name;
    }

    public function hand()
    {
        return $this->hand;
    }

    public function addCard(Card $card)
    {
        $this->hand->addCard($card);
    }

    public function resetCards()
    {
        $this->hand = new CardCollection();
    }

    public function resetAchievementUnlocked()
    {
        $this->achievement = null;
    }

    public function setAchievementUnlocked(Achievement $achievement)
    {
        $this->achievement = $achievement;
    }

    public function __toString()
    {
        $result = $this->name;

        if ($this->hand->numberOfCards() > 0)
        {
            $result .= " ";
            $result .= (string)$this->hand;
        }

        if (isset($this->achievementUnlocked))
        {
            $result .= " " . $this->achievementUnlocked;
        }
        return $result;
    }
}