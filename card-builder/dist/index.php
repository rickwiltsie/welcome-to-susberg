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

<button id="save-images-button">Save Images</button>

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
            <div class="card instruction athlete pattern-diagonal-stripes-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Athlete"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Trash</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card instruction athlete pattern-diagonal-stripes-md">
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
            <div class="card instruction athlete pattern-diagonal-stripes-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Turn Overview"></div>
                <div class="rules">
                    <div class="icon">
                        <div stat="pwr">
                            <span></span>
                        </div>
                        <div class="definition">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div class="icon">
                        <div class="definition">
                            <div><u>Defense Phase</u><br>Defend from foes<br>using Block.</div>
                        </div>
                        <div stat="blk">
                            <span></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div stat="lck">
                            <span></span>
                        </div>
                        <div class="definition">
                            <div><u>Loot Phase</u><br>Spend Luck to<br>buy or draw a Loot.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>

    <li>
        <div class="wrapper" id="api-test">
            <div class="card instruction inventor pattern-checks-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Athlete"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Trash</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card instruction inventor pattern-checks-md">
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
            <div class="card instruction inventor pattern-checks-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Turn Overview"></div>
                <div class="rules">
                    <div class="icon">
                        <div stat="pwr">
                            <span></span>
                        </div>
                        <div class="definition">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div class="icon">
                        <div class="definition">
                            <div><u>Defense Phase</u><br>Defend from foes<br>using Block.</div>
                        </div>
                        <div stat="blk">
                            <span></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div stat="lck">
                            <span></span>
                        </div>
                        <div class="definition">
                            <div><u>Loot Phase</u><br>Spend Luck to<br>buy or draw a Loot.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li><li>
        <div class="wrapper" id="api-test">
            <div class="card instruction musician pattern-zigzag-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Athlete"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Trash</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card instruction musician pattern-zigzag-md">
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
            <div class="card instruction musician pattern-zigzag-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Turn Overview"></div>
                <div class="rules">
                    <div class="icon">
                        <div stat="pwr">
                            <span></span>
                        </div>
                        <div class="definition">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div class="icon">
                        <div class="definition">
                            <div><u>Defense Phase</u><br>Defend from foes<br>using Block.</div>
                        </div>
                        <div stat="blk">
                            <span></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div stat="lck">
                            <span></span>
                        </div>
                        <div class="definition">
                            <div><u>Loot Phase</u><br>Spend Luck to<br>buy or draw a Loot.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>

    <li>
        <div class="wrapper" id="api-test">
            <div class="card instruction artist pattern-triangles-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Athlete"></div>
                <div class="rules">
                    <div>
                        <div class="explanation">
                            <u>Trash</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div>
                        <div class="explanation">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="wrapper" id="api-test">
            <div class="card instruction artist pattern-triangles-md">
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
            <div class="card instruction artist pattern-triangles-md">
                <?php include 'print.php'; ?>
                <div class="image"></div>
                <div name="Turn Overview"></div>
                <div class="rules">
                    <div class="icon">
                        <div stat="pwr">
                            <span></span>
                        </div>
                        <div class="definition">
                            <u>Attack Phase</u><br>Combine Power to defeat enemies.
                        </div>
                    </div>
                    <div class="icon">
                        <div class="definition">
                            <div><u>Defense Phase</u><br>Defend from foes<br>using Block.</div>
                        </div>
                        <div stat="blk">
                            <span></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div stat="lck">
                            <span></span>
                        </div>
                        <div class="definition">
                            <div><u>Loot Phase</u><br>Spend Luck to<br>buy or draw a Loot.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </li>
</ul>



<script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
<script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>
<script src="main.js"></script>
</body>
</html>