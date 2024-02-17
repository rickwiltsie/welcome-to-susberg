<!DOCTYPE html>
<html>
<head>
    <title>Sheets API Quickstart</title>
    <meta charset="utf-8" />
</head>
<body>
<p>Sheets API Quickstart</p>

<!--Add buttons to initiate auth sequence and sign out-->
<button id="authorize_button" onclick="handleAuthClick()">Authorize</button>
<button id="signout_button" onclick="handleSignoutClick()">Sign Out</button>

<pre id="content" style="white-space: pre-wrap;"></pre>

<hr>

<button id="test-button">TEST BUTTON</button>

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

                <div conjunction="and"></div>

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

<h1>Test Design</h1>

<ul class="grid">
    <li>

        <div class="wrapper" id="api-test">


            <div class="card inventor pattern-zigzag-md">

                <?php include 'print.php'; ?>

                <div cost="1"><div></div></div>
                <div class="image"></div>
                <div name="Home Run Hitter"></div>
                <div class="rules">

                    <div>
                        <div stat="blk">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div conjunction="and"></div>

                    <div>
                        <div stat="msc">
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>

    <li>
        <div class="card musician pattern-checks-md export-test">

            <?php include 'print.php'; ?>


            <div cost="S"><div></div></div>
            <div class="image"></div>
            <div name="Home Run Hitter"></div>
            <div class="rules">

                <div>
                    Spend a <span stat="pwr"><span></span><span></span></span> to do <span stat="pwr"><span></span></span> to all enemies.
                </div>

                <div conjunction="or"></div>

                <div>
                    When this is trashed, give all players <span stat="pwr"><span></span><span></span><span></span></span>.
                </div>

            </div>
        </div>
    </li>

    <li>
        <div class="card musician pattern-checks-md">

            <?php include 'print.php'; ?>


            <div cost="2"><div></div></div>
            <div class="image"></div>
            <div name="Home Run Hitter"></div>
            <div class="rules">

                <div>
                    Spend a <span stat="blk"><span></span><span></span></span> to do <span stat="blk"><span></span></span> to all enemies.
                </div>

                <div conjunction="or"></div>

                <div>
                    When this is trashed, give all players <span stat="blk"><span></span><span></span><span></span></span>.
                </div>

            </div>
        </div>
    </li>
    <li>
        <div class="card enemy pattern-vertical-stripes-md">

            <?php include 'print.php'; ?>

            <div power="3"><div></div></div>
            <div health="3"><div></div></div>
            <div class="image"></div>
            <div name="Alien Scout"></div>

            <div class="rules">

                <div rule="Test">
                    asdf
                </div>

            </div>


            <div reward="Reward:">
                asdf
            </div>
            <div level="3"></div>
        </div>
    </li>
</ul>



<script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
<script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>
<script src="main.js"></script>
</body>
</html>