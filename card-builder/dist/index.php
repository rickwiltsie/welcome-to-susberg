<!DOCTYPE html>
<html>
<head>
    <title>Card Builder</title>
    <meta charset="utf-8" />

    <?php include 'print.php'; ?>
</head>
<body>

<!--Add buttons to initiate auth sequence and sign out-->
<button id="authorize_button" onclick="handleAuthClick()">Authorize</button>

<button id="signout_button" onclick="handleSignoutClick()">Sign Out</button>

<button id="save-images-button-digital">Get Digital Images</button>

<button id="save-images-button-print">Get Print Images</button>

<ul id="cards-grid" class="grid">
    <li class="clone-source">
        <div class="card" key="X" count="">

            <?php include 'print.php'; ?>

            <div cost="4"><div></div></div>
            <div class="image">
                <img src="">
            </div>
            <div name="Test Name"></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

                <div conjunction></div>

                <div class='rule2'>
                    Rules 2
                </div>

            </div>
        </div>
    </li>
</ul>


<hr>

<ul id="enemies-grid" class="grid">
    <li class="clone-source">
        <div class="card enemy pattern-vertical-stripes-md">

            <?php include 'print.php'; ?>

            <div power=""><div></div></div>
            <div health=""><div></div></div>
            <div class="image">
                <img src="">
            </div>
            <div name></div>
            <div class="rules">
                <div class="rule">
                </div>
            </div>
            <div class="reward"></div>
            <div level=""></div>
        </div>
    </li>
</ul>

<hr>

<ul id="extras-grid" class="grid">


    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction athlete pattern-diagonal-stripes-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Athlete"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Trash:</u> Destroy cards, and remove them from the game.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Blocker:</u> Guards other players by giving them additional <span stat="blk"><span></span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction athlete pattern-diagonal-stripes-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules tracker">
                    <div>
                        <div>
                            <div health class="athlete-health"><div></div></div>
                            <div health class="athlete-health""><div></div></div>
                        <div health class="athlete-health""><div></div></div>
                    <div health class="athlete-health"><div></div></div>
                    <div health class="athlete-health"><div></div></div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction artist pattern-triangles-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Artist"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Stash:</u> Set a card aside to be used during a future turn.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Mixing:</u> Paint cards are mixed when there is more than one.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction artist pattern-triangles-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules tracker">
                    <div>
                        <div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction inventor pattern-checks-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Inventor"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Energy:</u> Score energy to power cards for the rest of the game.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Repair:</u> Fix a card by putting it at the bottom of the deck.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction inventor pattern-checks-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules tracker">
                    <div>
                        <div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction inventor pattern-checks-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules energy">
                    <div>1 Energy</div>
                    <div>2 Energy</div>
                    <div>3 Energy</div>
                    <div>4 Energy</div>
                    <div>5 Energy</div>
                    <div>6 Energy</div>
                    <div>7 Energy</div>
                    <div>8 Energy</div>
                </div>
            </div>
        </div>
    </li>




    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction musician pattern-zigzag-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Musician"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Music:</u> Gain <span stat="msc"><span></span></span>&nbsp;that can then be spent for powerful effects.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Inspire:</u> Allows players to draw additional cards.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction musician pattern-zigzag-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules tracker">
                    <div>
                        <div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                            <div health=""><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction musician pattern-zigzag-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules tracker">
                    <div>
                        <div>
                            <div health="" class="music"><div></div></div>
                            <div health="" class="music"><div></div></div>
                            <div health="" class="music"><div></div></div>
                            <div health="" class="music"><div></div></div>
                            <div health="" class="music"><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>






    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction blank enemy pattern-vertical-stripes-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Turn Overview"></div>
                <div class="rules">
                    <div class="icon">
                        <div stat="pwr">
                            <span></span>
                        </div>
                        <div class="definition">
                            1) <u>Attack Phase</u><br>Combine Power to defeat foes.
                        </div>
                    </div>
                    <div class="icon">
                        <div stat="blk">
                            <span></span>
                        </div>
                        <div class="definition">
                            2) <u>Defense Phase</u><br>Defend from foes<br>using Block.
                        </div>
                    </div>
                    <div class="icon">
                        <div stat="lck">
                            <span></span>
                        </div>
                        <div class="definition">
                            3) <u>Loot Phase</u><br>Spend Luck to<br>buy or draw a Loot.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra athlete pattern-diagonal-stripes-md">
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra artist pattern-triangles-md">
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra inventor pattern-checks-md">
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra musician pattern-zigzag-md">
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra enemy pattern-vertical-stripes-md">
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>

    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <h2>
                    Overview</h2>
                <p>
                    Players take on the roles of young kids defending their hometown of Susberg from the foes that besiege it from the shadows.
                </p>
                <h2>Contents</h2>
                <p>
                    • 34 Athlete cards<br>
                    • 34 Inventor cards<br>
                    • 34 Musician cards<br>
                    • 34 Artist cards<br>
                    • 40 Foe cards<br>
                </p>


                <h2>Objective</h2>
                <p>The players win when all foes in the foe deck have been defeated. The players lose if they are all out of health.</p>

                <div class="number">1</div>
            </div>
            <div class="foe-stamp bottom-right"><img src="monster/slime.png" class="rule-image"></div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <h2>Player Setup</h2>
                <p>Each player chooses their character, and gathers their cards. The ten Starter cards are removed to make the player's starting deck. (In 3-4 player games remove two power <span class="stat stat-1 power"><img src="extras/power.png"></span> cards) The remaining cards are shuffled, becoming the Loot Deck. Three of these are drawn face up making the Loot Pile.</p>

                <img src="extras/player-setup.png" alt="Diagram showing the player's board" class="rule-image">

                <div class="number">2</div>
            </div>
        </div>
    </li>


    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <h2>Foe Setup</h2>
                <p>Separate foe cards by level to create 4 piles, and shuffle each of the piles.</p>

                <img src="extras/foe-details.png" class="rule-image" alt="Diagram showing how to assemble the first foe deck">

                <p>For your first game, build the foe deck by placing cards from the piles in the following order.</p>
                <p>• Place 1 Lv.4 card face down on the table.<br/>
                    • Place 5 Lv.3 cards on top.<br/>
                    • Place 5 Lv.2 cards on top.<br/>
                    • Place 5 Lv.1 cards on top.<br/>
                    • Put the remaining foes away.</p>
                <p><u>For future games, see page 9 for more challenging foe decks.</u></p>

                <div class="number">3</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <h2>Turns</h2>
                <p>Each turn players draw 5 cards from their deck and place them on the table. (4 cards in a 3-4 player game) If a player must draw but has no cards, shuffle the discard pile to rebuild the deck, and continue drawing.</p>
                <p>Then if the board has less than 3 foes, draw them face up from the foe deck until it does.</p>
                <h3>Phase 1) Attack</h3>
                <p>Players combine their power <span class="stat stat-1 power"><img src="extras/power.png" class="rule-image"></span> to defeat foes.</p>
                <h3>Phase 2) Defend</h3>
                <p>Each player defends from foes using their block <span class="stat stat-1 block"><img src="extras/block.png" class="rule-image"></span>.</p>
                <h3>Phase 3) Loot</h3>
                <p>Each player buys loot with luck <span class="stat stat-1 luck"><img src="extras/luck.png" class="rule-image"></span> gained from defeated foes.</p>

                <div class="number">4</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">
                <h2>Phase 1) Attack</h2>
                <p>Players should discuss with each other how much power <span class="stat stat-1 power"><img src="extras/power.png" class="rule-image"></span> they have and how to distribute it amongst the foes. To defeat a foe use power on it equal to or greater than its health.</p>

                <img src="extras/power-example.png" class="rule-image" alt="Diagram showing how Power is used against foes">
                <p>Power groups (<span class="stat stat-2 power"><img src="extras/power2.png" class="rule-image"></span>, <span class="stat stat-3 power"><img src="extras/power3.png" class="rule-image"></span>) cannot be split between targets, and can only damage 1 foe.</p>

                <div class="number">5</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">


                <h2>Phase 2) Defend</h2>
                <p>Each remaining foe attacks each player with its power. A player must use their block <span class="stat stat-1 block"><img src="extras/block.png" class="rule-image"></span> equal to or greater than the foes power, or they lose 1 health.</p>

                <img src="extras/block-example.png" alt="Diagram showing how Block defends against foes" class="rule-image">
                <p>Block groups (<span class="stat stat-2 block"><img src="extras/block2.png" class="rule-image"></span>, <span class="stat stat-3 block"><img src="extras/block3.png" class="rule-image"></span>) cannot be split between targets, and can only defend against 1 foe.</p>

                <div class="number">6</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <h2>Phase 3) Loot</h2>
                <p>Players draw one card from their loot deck for free, and place it in their loot pile. Further draws cost 1 luck <span class="stat stat-1 luck"><img src="extras/luck.png" class="rule-image"></span>.</p>
                <p>Defeated foes reward luck to each player that can be spent to buy cards from their loot pile.</p>
                <img src="extras/luck-example.png" alt="" class="rule-image">

                <div class="number">7</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <h2>Card Rules</h2>
                <p>Some cards have 2 actions instead of one. Normally both actions can be used, but some require both be used, or only one action may be used..<p>
                <p>Card effects always refer to the owner of the card, unless otherwise stated.</p>
                <p>Effects from cards only last during the turn it is played.</p>

                <h2>Foe Rules</h2>
                <p>If a foe says to do something, each player must do it.</p>
                <p>When more than one foe triggers the same event (When drawn, when defeated), players decide their order.</p>
                <p>If a foe has an effect when it is drawn, all foes are revealed before it takes effect.</p>


                <div class="number">8</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">
                <h2>Rule Sets</h2>
                <p>Players may build a foe deck with a different number of foes for different experiences.</p>

                <p>Separate foe cards by level to create 4 piles, and shuffle each of the piles.. Build the foe deck by placing cards from the piles in the following order.</p>

                <table>
                    <tbody>
                    <tr class="order">
                        <td></td>
                        <td>1st</td>
                        <td>2nd</td>
                        <td>3rd</td>
                        <td>4th</td>
                        <td>5th</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Lv.3</td>
                        <td>Lv.4</td>
                        <td>Lv.3</td>
                        <td>Lv.2</td>
                        <td>Lv.1</td>
                    </tr>
                    <tr>
                        <td>Beginner</td>
                        <td>-</td>
                        <td>1</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Easy</td>
                        <td>2</td>
                        <td>1</td>
                        <td>7</td>
                        <td>6</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Normal</td>
                        <td>2</td>
                        <td>1</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hard</td>
                        <td>2</td>
                        <td>1</td>
                        <td>9</td>
                        <td>6</td>
                        <td>3</td>
                    </tr>
                    </tbody>
                </table>

                <p><em>Experiment with your own rules, and share them with others!</em></p>

                <div class="number">9</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">
                <h2>Character Abilities</h2>
                <h3>Trash</h3>
                <p>Athletes can trash cards and remove them from the game. Athlete cards that are trashed instead go to a trash pile next to the player. </p>

                <h3>Stash</h3>
                <p>Artists can stash cards. A stashed card is set aside by the player, not to be returned to its discard pile. It can then be used on a future turn.</p>

                <h3>Mixing</h3>
                <p>The artist may get additional actions by mixing Paints. Paints are considered mixed when there are at least two cards with "Paint" in the name.</p>

                <div class="number">10</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <h3>Music</h3>
                <p>Musicians cards may have an action that gives  (Music). Other cards may spend it to perform certain actions.</p>

                <img src="extras/music-energy-example.png" alt="" class="rule-image">

                <h3>Energy</h3>
                <p>The inventor may get additional actions when they have a minimum of energy. Energy is a running score that can be gained from cards.</p>

                <h3>Repair</h3>
                <p>Inventors can repair cards by returning them to the bottom of a player's deck.</p>

                <div class="number">11</div>
            </div>
        </div>
    </li>

</ul>

















<hr>

<h1>Test Design</h1>

<ul class="grid">





    <li>
        <div class="card athlete pattern-diagonal-stripes-md" key="X" count="">

            <?php include 'print.php'; ?>

            <div cost="2"><div></div></div>
            <div class="image">
                <img src="art/karate-gi.png">
            </div>
            <div name="Football Helmet"></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

                <div conjunction>and</div>

                <div class='rule2'>
                    Rules 2
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card artist pattern-diagonal-stripes-md" key="X" count="">

            <?php include 'print.php'; ?>

            <div cost="2"><div></div></div>
            <div class="image">
                <img src="art/karate-gi.png">
            </div>
            <div name="Pallete"></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

                <div conjunction>or</div>

                <div class='rule2'>
                    Long set of text to make it to exactly three lines.
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card artist pattern-diagonal-stripes-md" key="X" count="">

            <?php include 'print.php'; ?>

            <div cost="2"><div></div></div>
            <div class="image">
                <img src="art/karate-gi.png">
            </div>
            <div name="Pallete"></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

                <div conjunction>or</div>

                <div class='rule2'>
                    Long set of text to make it to exactly three lines.
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card enemy pattern-vertical-stripes-md">

            <?php include 'print.php'; ?>

            <div power="3"><div></div></div>
            <div health="4"><div></div></div>
            <div class="image">
                <img src="monster/slime.png">
            </div>
            <div name="Slimey"></div>
            <div class="rules">
                <div class="rule">
                    Do a thing.
                </div>
            </div>
            <div class="reward"></div>
            <div level="3"></div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">


                <div class="number">12</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <div class="number">4</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <div class="number">3</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <div class="number">4</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <div class="number">3</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">
                <div class="number">4</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">

                <div class="number">3</div>
            </div>
        </div>
    </li>
    <li>
        <div class="card page">

            <?php include 'print.php'; ?>

            <div class="page-rules">
                <div class="number">4</div>
            </div>
        </div>
    </li>

</ul>



<script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
<script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>
<script src="main.js"></script>
</body>
</html>