<h2>And so the TDD begins...</h2>

<p>
    I want to test that...
</p>

<ul>
    <li>A card that i create can output its value + suit correctly</li>
    <li>A card collection displays its cards</li>
    <li>A poker deck contains all the expected cards</li>
    <li>A player displays his hand correctly</li>
</ul>

<p>
    <div class="note">Note:</div>
    I read that suits have a ranking aswell in some Poker games. I'll try to keep this ranking in code, but i won't check for it in the game we aim for). <br/>
    Source: <a target="_blank" href="http://www.texasholdem-poker.com/rank_of_suits">http://www.texasholdem-poker.com/rank_of_suits</a>
</p>

<hr/>

<h2>Run Texas Hold em</h2>

<?php
require_once("runTexasHoldEmGame.php");
?>