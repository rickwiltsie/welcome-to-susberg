<!DOCTYPE html>
<html>
<head>
    <title>Rules</title>
    <meta charset="utf-8" />

    <style>


        <?php
        $path = './Signatra.otf';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:font/opentype;charset=utf-8;base64,' . base64_encode($data);
        ?>
        @font-face {
            font-family: Signatra;
            /* src: url("Minuscule6reg.otf") format("opentype"); */
            src: url(<?=$base64 ?>) format("opentype");

        }

        <?php
    $path = './Minuscule6reg.otf';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:font/opentype;charset=utf-8;base64,' . base64_encode($data);
    ?>
        @font-face {
            font-family: chalkboard;
            /* src: url("Minuscule6reg.otf") format("opentype"); */
            src: url(<?=$base64 ?>) format("opentype");

        }

        <?php
        $path = './HappyLucky.ttf';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:font/opentype;charset=utf-8;base64,' . base64_encode($data);
        ?>
        @font-face {
            font-family: happylucky;
            src: url(<?=$base64 ?>) format("truetype");
        }

        <?php
        $path = './blacknorth.otf';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:font/opentype;charset=utf-8;base64,' . base64_encode($data);
        ?>
        @font-face {
            font-family: blacknorth;
            src: url(<?=$base64 ?>) format("opentype");
        }




        .intro {
            width: 100%;
            height:  calc(7in * .95);
            background-image: url("./extras/bg.png");
            background-size: cover;
            position: relative;
            background-position: -320px center;
            overflow: hidden;
            filter: grayscale(100%);
        }
        .details {
            color: black;
            font-weight: bold;
            font-size: 32px;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height:  calc(7in * .95);
            background: linear-gradient(to bottom,  rgba(245,245,245,0.9) 0%,rgba(245,245,245,0.9) 60%,rgba(245,245,245,1) 90%);
        }

        .details h1 {
            font-family: happylucky;
            letter-spacing: 1px;
            font-size: 24px;
            position: absolute;
            text-transform: capitalize;
            text-align: center;
        }
        .details h1:nth-child(1) {
            top: .5in;
            left: .5in;
            transform-style: preserve-3d;
            transform: rotateY(10deg) rotateX(-50deg) rotateZ(-30deg);
        }
        .details h1:nth-child(2) {
            top: 2in;
            right: .5in;
        }
        .details h1:nth-child(3) {
            top: 3in;
            left: .5in
        }
        .details h1 span {
            font-size: .8em;
        }


        .details .site {
            font-family: 'Chalkboard';
            position: absolute;
            bottom: .5in;
            right: .5in;
            font-size: 18px;
            line-height: 24px;
            width: 2.7in;
        }
        .details .site .athlete {
            color: #960100;
        }
        .details .site .artist {
            color: #027D96;
        }
        .details .site .musician {
            color: #009600;
        }
        .details .site .inventor {
            color: #7D0196;
        }
        .details .site div.domain {
            margin-top: 20px;
            text-align: right;
        }
        .details .site span.signature {
            font-family: 'Signatra DEMO';
            font-size: 48px;
        }

        .logo {
            position: absolute;
            transform: translateY(-100%);
            margin-top: -.5in;
            left: .1in;
            z-index: 2;
            overflow: hidden;
            width: 4in;
            height: 2.8in;
        }
        .logo img {
            position: relative;
            top: .1in;
            left: .1in;
            width: 3.5in;
            height: auto;
            transform: rotate(5deg);
        }
        .page {
            border: .08in solid black;
            width: calc(7.5in * .95);
            height:  calc(10.5in * .95);
            position: relative;
            font-size: 11px;
            background-color: #F5F5F5;
            overflow: hidden;
            break-inside: avoid;
        }

        .page .credits {
            position: absolute;
            bottom: .5in;
            right: 0;
            font-size: 12px;
            font-family: 'Chalkboard';
            width: calc(2.5in * .95);
            text-align: center;
        }
        .page .credits .name {
            font-size: 20px;
            display: block;
        }
        .page .credits .name:nth-of-type(1) {
            margin-top: 5px;
        }
        .page .credits .name:nth-of-type(2) {
            margin-bottom: 30px;
        }


        .rules-wrapper {
            display: flex;
            justify-content: space-between;
        }



        .rules {
            width: 33.3%;
            font-size: 12px;
            line-height: 13px;
            letter-spacing: -.5px;
            border-radius: 0 !important;
            background-color: rgba(245,245,245,1);
            padding: .15in;
            text-align: justify;
        }


        .rules h2:first-child,
        .rules h3:first-child {
            margin-top: 0;
        }
        .rules h2 {
            font-size: 16px;
            font-weight: bolder;
            margin: 16px 0 4px 0;
        }
        .rules h3 {
            font-size: 12px;
            font-weight: bolder;
            margin: 8px 0 0 0;
        }
        .rules p {
            margin: 0 0 8px 0;
        }

        .rules img {
            display: block;
            margin: 0 0 16px 0;
            width: 100%;
        }
        .rules table {
            margin: 0 0 16px 0;
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
        }
        .rules table td:first-child {
            text-align: left;
        }
        .rules table td {
            font-size: 11px;
            text-align: center;
        }
        .rules table .order td {
            border-bottom: 1px solid #000;
        }


        .rules .stat {
            height: 10px;
            position: relative;
            display: inline-block;
        }
        .rules .stat.stat-1 {
            width: 14px;
        }
        .rules .stat.stat-2 {
            width: 24px;
        }
        .rules .stat.stat-3 {
            width: 32px;
        }
        .rules .stat img {
            display: inline-block !important;
            height: 18px !important;
            width: auto !important;
            margin: 0;
            vertical-align: bottom;
            position: absolute;
        }

        .rules .stat.power img {
            height: 18px !important;
            width: auto !important;
            top: -3px;
            left: -2px;
        }
        .rules .stat.block img {
            height: 14px !important;
            width: auto !important;
            top: 0;
            left: 0;
        }
        .rules .stat.luck img {
            height: 18px !important;
            width: auto !important;
            top: -3px;
            left: -2px;
        }

    </style>

</head>
<body>

<?php
$fileList = file_get_contents('./cards/_fileNames.json');
$files = json_decode($fileList, true);
?>

<div class="page">



    <div class="intro">



    </div>

    <div class="details">

        <div class="site">

            <p>A social cooperative <br>deckbuilding experience.</p>
            <p>2 to 4 young friends<br>protect their home<br>from the supernatural.</p>
            <p>Become an <span class="class athlete">athlete</span>, <span class="artist">artist</span>, <span class="musician">musician</span>, or <span class="inventor">inventor</span>.</p>
            <br><br><br><br>
            Watch how to play!<br>
            Play the game! <br>
            Talk with us!<br>
            <div class="domain">all at&nbsp;<span class="signature">Susberg</span>.com</div>
            <br><br>
        </div>
    </div>

    <div class="logo">
        <img src="./extras/logo.png" alt="">
    </div>

    <div class="rules-wrapper">
        <div class="rules">
            <h2>
                Overview</h2>
            <p>
                Players take on the roles of kids defending their hometown of Susberg from the foes that besiege it from the shadows.
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
            <p>The players win when all foes in the Foe Deck have been defeated. The players lose if they are all out of Health.</p>

            <div class="number">1</div>
        </div>
        <div class="rules">
            <h2>Player Setup</h2>
            <p>Each player chooses their character, and gathers their cards. The ten Starter cards are removed to make the player's starting deck. (In 3-4 player games remove a Power <span class="stat stat-1 power"><img src="extras/power.png" class="rule-image"></span> and Block <span class="stat stat-1 block"><img src="extras/block.png" class="rule-image"></span> card.) The remaining cards are shuffled, becoming the Loot Deck. Three of these are drawn face up making the Loot Pile.</p>

            <img src="extras/player-setup.png" alt="Diagram showing the player's board" class="rule-image">
        </div>
        <div class="rules">
            <h2>Foe Setup</h2>
            <p>Separate foe cards by level to create 4 piles, and shuffle each of the piles.</p>

            <img src="extras/foe-details.png" class="rule-image" alt="Diagram showing how to assemble the first foe deck">

            <p>For your first game, build the Foe Deck by placing cards from the piles face down in the following order.</p>
            <p>• Place 1 Lv.3 card face down on the table.<br/>
                • Place 4 Lv.2 cards on top.<br/>
                • Place 6 Lv.1 cards on top.<br/>
                • Put the remaining foes away.</p>
            <p><u>For future games, see page 9 for more challenging Foe Decks.</u></p>
        </div>

    </div>
</div>
<div class="page">

    <div class="rules-wrapper">
        <div class="rules">
            <h2>Turns</h2>
            <p>Each turn players draw 5 cards from their deck and place them face up on the table (4 cards in a 3-4 player game). If a player must draw but has no cards, shuffle the discard pile to rebuild the deck, and continue drawing.</p>
            <p>Then if the board has less than 3 foes, draw them face up from the Foe Deck until it does.</p>
            <h3>Phase 1) Attack</h3>
            <p>Players combine their Power <span class="stat stat-1 power"><img src="extras/power.png" class="rule-image"></span> to defeat foes.</p>
            <h3>Phase 2) Defend</h3>
            <p>Each player defends from foes using their Block <span class="stat stat-1 block"><img src="extras/block.png" class="rule-image"></span>.</p>
            <h3>Phase 3) Loot</h3>
            <p>Each player buys loot cards with Luck <span class="stat stat-1 luck"><img src="extras/luck.png" class="rule-image"></span> gained from defeated foes.</p>


            <h2>Phase 1) Attack</h2>
            <p>Players should discuss with each other how much Power <span class="stat stat-1 power"><img src="extras/power.png" class="rule-image"></span> they have and how to distribute it amongst the foes. To defeat a foe use Power on it equal to or greater than its Health.</p>

            <img src="extras/power-example.png" class="rule-image" alt="Diagram showing how Power is used against foes">
            <p>Power groups <span class="stat stat-2 power"><img src="extras/power2.png" class="rule-image"></span> <span class="stat stat-3 power"><img src="extras/power3.png" class="rule-image"></span> cannot be split between targets, and can only damage 1 foe.</p>

            <h2>Phase 2) Defend</h2>
            <p>Each remaining foe attacks each player with its Power. A player must use their Block <span class="stat stat-1 block"><img src="extras/block.png" class="rule-image"></span> equal to or greater than the foes Power, or they lose 1 Health.</p>

            <img src="extras/block-example.png" alt="Diagram showing how Block defends against foes" class="rule-image">
            <p>Block groups <span class="stat stat-2 block"><img src="extras/block2.png" class="rule-image"></span> <span class="stat stat-3 block"><img src="extras/block3.png" class="rule-image"></span> cannot be split between targets, and can only defend against 1 foe.</p>

        </div>


        <div class="rules">

            <h2>Phase 3) Loot</h2>
            <p>Players draw one card from their Loot Deck for free, and place it in their Loot Pile. Further draws cost 1 luck <span class="stat stat-1 luck"><img src="extras/luck.png" class="rule-image"></span>.</p>
            <p>Defeated foes reward Luck to each player. This can be spent to buy any cards from their Loot Pile so long as they have enough Luck. When purchased, players put the card in their discard.</p>
            <img src="extras/luck-example.png" alt="" class="rule-image">

            <h2>Card Rules</h2>
            <p>When an effect says "a card" it refers to a card that is in play owned by the player.</p>
            <p>Some cards have 2 actions instead of one. Normally both actions can be used, but some require both be used, or only one action may be used.<p>
            <p>Card effects always refer to the owner of the card, unless otherwise stated.</p>
            <p>Effects from cards only last during the turn it is played.</p>

            <h2>Foe Rules</h2>
            <p>If a foe says to do something, each player must do it.</p>
            <p>When more than one foe triggers the same event (when drawn, when defeated), players decide their order.</p>
            <p>If a foe has an effect when it is drawn, all foes are revealed before it takes effect.</p>


            <h2>Rule Sets</h2>
            <p>Players may build a Foe Deck with a different number of foes for different experiences.</p>

            <p>Separate foe cards by Level to create 4 piles, and shuffle each of the piles. Build the Foe Deck by placing cards from the piles in the following order.</p>

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
                    <td>-</td>
                    <td>1</td>
                    <td>4</td>
                    <td>6</td>
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

        </div>




        <div class="rules">


            <h2>Character Abilities</h2>
            <h3>Trash</h3>
            <p>Athletes can trash cards in play and remove them from the game. Athlete cards that are trashed instead go to a trash pile next to the player. </p>

            <h3>Stash</h3>
            <p>Artists can stash cards in play. A stashed card is set aside by the player, not to be returned to its discard pile. It can then be used on a future turn.</p>

            <h3>Mixing</h3>
            <p>The Artist may get additional actions by mixing Paints. Paints are considered mixed when there are at least two cards with "Paint" in the name are in play.</p>

            <h3>Music</h3>
            <p>Musician cards may have an action that gives Music <span class="stat stat-1 music"><img src="extras/music.png" class="rule-image"></span>. Other cards may spend it to perform certain actions.</p>

            <img src="extras/music-energy-example.png" alt="" class="rule-image">

            <h3>Energy</h3>
            <p>The Inventor may get additional actions when they have at least a specified amount of Energy. Energy is a running score that can be gained from cards.</p>

            <h3>Repair</h3>
            <p>Inventors can repair cards in play by returning them to the bottom of a player's deck.</p>



            <div class="credits">

                designed by
                <span class="name">Rick Wiltsie</span>
                &
                <span class="name">Jordan Hart</span>
                welcome@susberg.com
            </div>
        </div>
    </div>



</div>




</body>
</html>