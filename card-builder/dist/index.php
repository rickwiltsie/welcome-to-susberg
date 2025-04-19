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
        <div class="wrapper">
            <div class="card" key="X" counat="">
                <div class="bg"></div>

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
                <div class="only-in-2player">Only use in 2 player games</div>
            </div>
        </div>
    </li>
</ul>


<hr>

<ul id="enemies-grid" class="grid">
    <li class="clone-source">
        <div class="wrapper">
            <div class="card enemy">
                <div class="bg pattern-vertical-stripes-md"></div>

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
                <div class="set">
                    <img src="extras/exp-ks.png">
                </div>
            </div>
        </div>
    </li>
</ul>

<hr>

<ul id="extras-grid" class="grid">


    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction athlete">
                <div class="bg pattern-diagonal-stripes-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="The Athlete"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            Athletes have the ability to trash cards, removing them from the game. Some cards even allow them to come back with powerful effects.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            Some athlete cards can give other players Block <span stat="blk"><span></span></span>, protecting them when they are unable to protect themselves.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra instruction athlete">
                <div class="bg pattern-diagonal-stripes-md"></div>
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
            <div class="card extra instruction artist">
                <div class="bg pattern-triangles-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="The Artist"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            Some artist cards allow for cards to be stashed. This means that a card is set aside to be used on a later turn.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            When multiple cards with "paint" in the name are in play, they are mixed. Mixing allows for additional powerful effects.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra instruction artist">
                <div class="bg pattern-triangles-md"></div>
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
            <div class="card extra instruction inventor">
                <div class="bg pattern-checks-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="The Inventor"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            Inventors gain Energy <span stat="eng"><span></span></span> for the entire game, which unlocks extra card abilities once you reach a minimum amount.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            Inventor cards can tinker a deck by letting the player look at the top card and either keep it there or discard it.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra instruction inventor">
                <div class="bg pattern-checks-md"></div>
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
            <div class="card card-back extra instruction inventor">
                <div class="bg pattern-checks-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules tracker energy">
                    <div>
                        <div>
                            <div health="" class="energy"><div></div></div>
                            <div health="" class="energy"><div></div></div>
                            <div health="" class="energy"><div></div></div>
                            <div health="" class="energy"><div></div></div>
                            <div health="" class="energy"><div></div></div>
                            <div health="" class="energy"><div></div></div>
                            <div health="" class="energy"><div></div></div>
                            <div health="" class="energy"><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>




    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction musician">
                <div class="bg pattern-zigzag-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="The Musician"></div>


                <div class="rules">
                    <div>
                        <div class="explanation">
                            Some musician cards gain Music <span stat="msc"><span></span></span> which can then be spent for additional powerful effects.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            The musician inspires their friends by letting them draw extra cards, and a few more for themselves.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra instruction musician">
                <div class="bg pattern-zigzag-md"></div>
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
            <div class="card card-back extra instruction musician">
                <div class="bg pattern-zigzag-md"></div>
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
            <div class="card extra instruction blank enemy">
                <div class="bg pattern-vertical-stripes-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>

                <div class="rules full">
                    <div>
                        <div class="explanation small">
                            Be kind and encouraging to one another.<br> Remember... you're in this together.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <strong>Card Rules</strong>
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            Players draw five cards in a 2 player game. With 3-4 players, draw four.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            Some cards have more than one effect. Both can be used once during a turn.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            Player cards may refer to "a card". That is a card in play, and owned by that player.
                        </div>
                    </div>



                    <div>
                        <div class="explanation">
                            <strong>Foe Rules</strong>
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            If a foe says to do something, it refers to all players.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            When foes are drawn and defeated, players decide the order it happens.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            When rules say "a card" that means a card in play, owned by that player.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>



    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction blank enemy">
                <div class="bg pattern-vertical-stripes-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div class="rules full">
                    <div>
                        <div class="explanation">
                            <strong>Turn Order</strong>
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            <strong>1. You Draw!</strong><br>
                            Draw foe and player cards face down. Foes flip first, then players.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            <strong>2. You Attack!</strong><br>
                            Players combine Power <span stat="pwr"><span></span></span> cards to defeat foes. Foes lose 1 Health for each <span stat="pwr"><span></span></span> used on it. Foes with no health remaining are defeated, and removed.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            <strong>3. You Defend!</strong><br>
                            Players play Block <span stat="blk"><span></span></span> cards on foes to defend themselves. Each foe attacks each player with its <span stat="pwr"><span></span></span>. Players lose 1 health for each unblocked foe.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            <strong>4. You Buy!</strong><br>
                            Defeated foes reward Dollars <span stat="lck"><span></span></span> to each player to buy cards. When bought, a new card is drawn to replace it. Players may spend a <span stat="lck"><span></span></span> to replace a card in your shop.
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            <strong>You... Lose?</strong><br>
                            If any player has lost 5 health all players lose. Susberg falls into darkness... until next time?
                        </div>
                    </div>
                    <div>
                        <div class="explanation small">
                            <strong>You WIN!!!</strong><br>
                            Once all foes have been defeated, CELEBRATE! Susberg has been saved!
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>

    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra athlete">
                <div class="bg pattern-diagonal-stripes-md"></div>
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra artist">
                <div class="bg pattern-triangles-md"></div>
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra inventor">
                <div class="bg pattern-checks-md"></div>
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra musician">
                <div class="bg pattern-zigzag-md"></div>
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card card-back extra enemy">
                <div class="bg pattern-vertical-stripes-md"></div>
                <?php include 'print.php'; ?>
                <div class="first logo" alt=""></div>
                <div class="second logo" alt=""></div>
            </div>
        </div>
    </li>



</ul>

















<hr>

<h1>Test Design</h1>

<ul class="grid">





    <li>
        <div class="card athlete" key="X" count="">
            <div class="bg pattern-diagonal-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div cost="3"><div></div></div>
            <div class="image">
                <img src="art/karate-gi.png">
            </div>
            <div name="Football Helmet"></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

            </div>
            <div class="only-in-2player">(Only use in 2 player games)</div>
        </div>
    </li>



    <li>
        <div class="card musician" key="X" count="">
            <div class="bg pattern-zigzag-md"></div>

            <?php include 'print.php'; ?>

            <div cost="S"><div></div></div>
            <div class="image">
                <img src="art/karate-gi.png">
            </div>
            <div name="Football Helmet"></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

                <div conjunction="and">and</div>

                <div class='rule2'>
                    Rules 2
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card inventor" key="X" count="">
            <div class="bg pattern-checks-md"></div>

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

                <div conjunction="or">or</div>

                <div class='rule2'>
                    Long set of text to make it to exactly three lines.
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card artist" key="X" count="">
            <div class="bg pattern-triangles-md"></div>

            <?php include 'print.php'; ?>

            <div cost="1"><div></div></div>
            <div class="image">
                <img src="art/karate-gi.png">
            </div>
            <div name="Pallete"></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

                <div conjunction></div>

                <div class='rule2'>
                    Long set of text to make it to exactly three lines.
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card artist" key="X" count="">
            <div class="bg pattern-diagonal-stripes-md"></div>

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

                <div conjunction="and">and</div>

                <div class='rule2'>
                    Long set of text to make it to exactly three lines.
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card artist" key="X" count="">
            <div class="bg pattern-diagonal-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div cost="2"><div></div></div>
            <div class="image">
                <img src="art/karate-gi.png">
            </div>
            <div name="Test"><span>Test</span></div>
            <div class="rules">

                <div class='rule1'>
                    Rules 1
                </div>

                <div conjunction="8+ energy">energy</div>

                <div class='rule2'>
                    Long set of text to make it to exactly three lines.
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card artist" key="X" count="">
            <div class="bg pattern-diagonal-stripes-md"></div>

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

                <div conjunction="or spend MSC"></div>

                <div class="rule2">Spend a <span stat="msc"> <span></span> </span> for<br>other players to<br>draw a card.</div>

            </div>
        </div>
    </li>

    <li>
        <div class="card enemy">
            <div class="bg pattern-vertical-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div power="3"><div></div></div>
            <div health="4"><div></div></div>
            <div class="image">
                <img src="monster/_nuhuh.webp">
            </div>
            <div name="Nuh Uh"><span>Nuh Uh</span></div>
            <div class="rules">
                <div class="rule">
                    If all players yell "Yuh Huh!" this is defeated.
                </div>
            </div>
            <div class="reward"><span stat="lck"><span></span><span></span></span></div>
            <div level="3"></div>
        </div>
    </li>

    <li>
        <div class="card enemy">
            <div class="bg pattern-vertical-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div power="3"><div></div></div>
            <div health="4"><div></div></div>
            <div class="image">
                <img src="monster/_samsonite.webp">
            </div>
            <div name="Uncle Samsonite"><span>Uncle Samsonite</span></div>
            <div class="rules">
                <div class="rule">
                    If you hold<br>Cola Espuma near<br>this it is defeated.
                </div>
            </div>
            <div class="reward"><span stat="lck"><span></span><span></span></span></div>
            <div level="3"></div>
        </div>
    </li>

    <li>
        <div class="card enemy">
            <div class="bg pattern-vertical-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div power="3"><div></div></div>
            <div health="4"><div></div></div>
            <div class="image">
                <img src="monster/_espuma.webp">
            </div>
            <div name="Cola Espuma"><span>Cola Espuma</span></div>
            <div class="rules">
                <div class="rule">
                    This is defetaed<br>when held near<br>Uncle Samsonite.
                </div>
            </div>
            <div class="reward"><span stat="lck"><span></span><span></span></span></div>
            <div level="3"></div>
        </div>
    </li>

    <li>
        <div class="card enemy">
            <div class="bg pattern-vertical-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div power="3"><div></div></div>
            <div health="4"><div></div></div>
            <div class="image">
                <img src="monster/_mlg.jpg">
            </div>
            <div name="MLG"><span>MLG</span></div>
            <div class="rules">
                <div class="rule">
                    This card can bounce from enemy to enemy when it attacks. It gives Health.
                </div>
            </div>
            <div class="reward"><span stat="lck"><span></span><span></span></span></div>
            <div level="3"></div>
            <div class="set">
                <img src="extras/exp-ks.png">
            </div>
        </div>
    </li>

    <li>
        <div class="card enemy">
            <div class="bg pattern-vertical-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div power="4"><div></div></div>
            <div health="5"><div></div></div>
            <div class="image">
                <img src="monster/_staggering-beauty.webp">
            </div>
            <div name="Beauty Worm"><span>Beauty Worm</span></div>
            <div class="rules">
                <div class="rule">
                    Wiggle this card for<br>it to freak out.
                </div>
            </div>
            <div class="reward"><span stat="lck"><span></span><span></span></span></div>
            <div level="3"></div>
            <div class="set">
                <img src="extras/exp-ks.png">
            </div>
        </div>
    </li>

    <li>
        <div class="card enemy">
            <div class="bg pattern-vertical-stripes-md"></div>

            <?php include 'print.php'; ?>

            <div power="6"><div></div></div>
            <div health="6"><div></div></div>
            <div class="image">
                <img src="monster/_proxy.webp">
            </div>
            <div name="Proxy"><span>Proxy</span></div>
            <div class="rules">
                <div class="rule">
                    Wherever you look,<br>there it is.
                </div>
            </div>
            <div class="reward"><span stat="lck"><span></span><span></span></span></div>
            <div level="3"></div>
            <div class="set">
                <img src="extras/exp-ks.png">
            </div>
        </div>
    </li>

</ul>






<script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
<script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>
<script src="main.js"></script>
</body>
</html>
