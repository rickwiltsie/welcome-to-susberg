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
    </li>
</ul>


<hr>

<ul id="enemies-grid" class="grid">
    <li class="clone-source">
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
                            Athletes have the ability to trash cards, removing them from the game. Some cards even let them come back.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            Some athlete cards can give other players Block(<span stat="blk"><span></span></span>), protecting them when they are unable to themselves.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card extra instruction athlete">
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
                            When multiple cards with "paint" in the name are in play, they are mixed. Mixing allows additional effects.
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
                            Inventors gain energy for the entire game, which unlocks extra card abilities once you reach a minimum amount.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            Some inventor cards can repair a card by putting it at the bottom of the owner's deck.
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
            <div class="card extra instruction musician">
                <div class="bg pattern-zigzag-md"></div>
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="The Musician"></div>


                <div class="rules">
                    <div>
                        <div class="explanation">
                            Some musician cards gain Music(<span stat="msc"><span></span></span>) which can then be spent for additional powerful effects.
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
            <div class="card extra instruction musician">
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
            <div class="card extra instruction musician">
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
                <div name="Turn Order"></div>
                <div class="rules">


                    <div>
                        <div class="explanation">
                            Players draw cards face up.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            Draw foes until there are 3.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Attack Phase</u>: Combine Power(<span stat="pwr"><span></span></span>) to defeat foes.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Defense Phase</u>: Protect from foes using Block(<span stat="blk"><span></span></span>) .
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Buy Phase</u>: Spend Coins(<span stat="lck"><span></span></span>) to buy or draw shop cards.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            Return cards to your discard.
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

            <div cost=""><div></div></div>
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

            <div cost="2"><div></div></div>
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

            <div cost="2"><div></div></div>
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
            <div name="Pallete"></div>
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
                <img src="monster/karateka.png">
            </div>
            <div name="Dimensional Rift"></div>
            <div class="rules">
                <div class="rule">
                    Do a thing.
                </div>
            </div>
            <div class="reward"><span stat="lck"><span></span><span></span></span></div>
            <div level="3"></div>
        </div>
    </li>

</ul>






<script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
<script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>
<script src="main.js"></script>
</body>
</html>
