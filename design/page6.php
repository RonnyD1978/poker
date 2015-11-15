<h2>First classes / setup</h2>

<ul>
    <li>Created a simple PokeGameFactory, and an EmptyPokerGameFactory (no card deck or achievements are set)</li>
    <li>Created some empty interfaces: Achievement, CardCollection, PokerPlayer</li>
    <li>Created an empty CardDeck class, implementing CardCollection</li>
    <li>

        Created a basic layout for the PokerGame class:

        <pre>
<code>
    class PokerGame
    {
        private $cardDeck;
        private $achievements;

        public function setCardDeck(CardDeck $cardDeck)
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
                $this->cardDeck->dealCardsTo($player);
            }
        }

        private function compareCards(array $players)
        {
            $orderedPlayers = $players;

            return $orderedPlayers;
        }
    }
 </code>
        </pre>
    </li>
</ul>

<hr/>

<h2>Run simple game</h2>

<?php
require_once("runSimpleGame.php");
?>