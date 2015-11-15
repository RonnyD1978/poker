<h2>Description</h2>

<p>
    A <span class="mark">poker deck</span> contains 52 cards - each <span class="mark">card</span> has a <span class="mark">suit</span> which is one of <span class="mark">clubs, diamonds, hearts, or spades</span> (denoted C, D, H, and S in the input data). Each card also has a value which is one of <span class="mark">2, 3, 4, 5, 6, 7, 8, 9, 10, jack, queen, king, ace</span> (denoted 2, 3, 4, 5, 6, 7, 8, 9, T, J, Q, K, A). For scoring purposes, the suits are unordered while the values are ordered as given above, with 2 being the lowest and ace the highest value.
    A <span class="mark">poker hand</span> consists of 5 cards dealt from the deck. Poker hands are ranked by the following partial order from lowest to highest.
</p>

<hr/>

<h2>Scoring system</h2>

<ul>
    <li><span class="mark">High Card</span>: Hands which do not fit any higher category are ranked by the value of their highest card. If the highest cards have the same value, the hands are ranked by the next highest, and so on.</li>
    <li><span class="mark">Pair</span>: 2 of the 5 cards in the hand have the same value. Hands which both contain a pair are ranked by the value of the cards forming the pair. If these values are the same, the hands are ranked by the values of the cards not forming the pair, in decreasing order. <span class="mark">=&gt; High Card</span></li>
    <li><span class="mark">Two Pairs</span>: The hand contains 2 different pairs. Hands which both contain 2 pairs are ranked by the value of their highest pair. Hands with the same highest pair are ranked by the value of their other pair. If these values are the same the hands are ranked by the value of the remaining card.<span class="mark">=&gt; High Card</span></li>
    <li><span class="mark">Three of a Kind</span>: Three of the cards in the hand have the same value. Hands which both contain three of a kind are ranked by the value of the 3 cards.<span class="mark">=&gt; High Card from Three of a Kind</span></li>
    <li><span class="mark">Straight</span>: Hand contains 5 cards with consecutive values. Hands which both contain a straight are ranked by their highest card.<span class="mark">=&gt; High Card from Straight</span></li>
    <li><span class="mark">Flush</span>: Hand contains 5 cards of the same suit. Hands which are both flushes are ranked using the rules for High Card.<span class="mark">=&gt; High Card from Flush</span></li>
    <li><span class="mark">Full House</span>: 3 cards of the same value, with the remaining 2 cards forming a pair. Ranked by the value of the 3 cards.<span class="mark">=&gt; High Card from Full House</span></li>
    <li><span class="mark">Four of a kind</span>: 4 cards with the same value. Ranked by the value of the 4 cards.<span class="mark">=&gt; High Card from Four of a kind</span></li>
    <li><span class="mark">Straight flush</span>: 5 cards of the same suit with consecutive values. Ranked by the highest card in the hand.<span class="mark">=&gt; High Card from Flush</span></li>
</ul>
