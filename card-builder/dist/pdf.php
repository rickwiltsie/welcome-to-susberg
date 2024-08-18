<!DOCTYPE html>
<html>
<head>
    <title>PDF Builder</title>
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
            font-size: 0;
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

        .page .rules {
            width: 33%;
            height: 33%;
            position: absolute;
            display: inline-block;
            overflow: hidden;
        }
        .page .rules.left {
            left: 0;
        }
        .page .rules.mid {
            left: 33.333%;
        }
        .page .rules.right {
            right: 0;
        }
        .page .rules:after {
            position: absolute;
            bottom: 0;
            left: 50%;
            margin-left: -10px;
            height: 20px;
            width: 20px;
            content: '';
            background-color: #F5F5F5;
        }
        .page .rules.cover:after {
            width: 100%;
            left: 0;
            height: 60px;
            margin-left: 0;
        }
        .page .rules img {
            position: absolute;
            width: 105%;
            height: 105%;
            left: -2.5%;
            top: -2.5%;
        }
        table {
            margin-bottom: 40px;
            break-inside: avoid;
            background-color: black;
        }
        td {
            background-color: black;
            position: relative;
        }
        img {
            width: calc(2.5in * .95);
            height:  calc(3.5in * .95);
            vertical-align: top;
        }
        td div:nth-of-type(1) {
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 0;
            border-top: .08in solid black;
            border-right: .08in solid transparent;
            border-bottom: .08in solid transparent;
            border-left: .08in solid black;.
        }
        td div:nth-of-type(2) {
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-top: .08in solid black;
            border-right: .08in solid black;
            border-bottom: .08in solid transparent;
            border-left: .08in solid transparent;
        }
        td div:nth-of-type(3) {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border-top: .08in solid transparent;
            border-right: .08in solid transparent;
            border-bottom: .08in solid black;
            border-left: .08in solid black;
        }
        td div:nth-of-type(4) {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 0;
            border-top: .08in solid transparent;
            border-right: .08in solid black;
            border-bottom: .08in solid black;
            border-left: .08in solid transparent;
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

    <div class="rules left" style="bottom: 0;">
        <img src="./cards/Page_1.png" />
    </div>
    <div class="rules mid" style="bottom: 0;">
        <img src="./cards/Page_2.png" />
    </div>
    <div class="rules right cover" style="bottom: 0;">
        <img src="./cards/Page_3.png" />
    </div>
</div>
<div class="page">
    <div class="rules left">
        <img src="./cards/Page_4.png" />
    </div>
    <div class="rules left" style="top: 33.333%;">
        <img src="./cards/Page_5.png" />
    </div>
    <div class="rules left" style="bottom: 0;">
        <img src="./cards/Page_6.png" />
    </div>
    <div class="rules mid">
        <img src="./cards/Page_7.png" />
    </div>
    <div class="rules mid" style="top: 31%;">
        <img src="./cards/Page_8.png" />
    </div>
    <div class="rules mid" style="bottom: 14.5%;">
        <img src="./cards/Page_9.png" />
    </div>
    <div class="rules mid" style="bottom: -2%;">
        <img src="./cards/Page_10.png" />
    </div>
    <div class="rules right">
        <img src="./cards/Page_11.png" />
    </div>
    <div class="rules right" style="top: 25%">
        <img src="./cards/Page_12.png" />
    </div>

    <div class="credits">

        designed by
        <span class="name">Rick Wiltsie</span>
        &
        <span class="name">Jordan Hart</span>
        welcome@susberg.com
    </div>

</div>

<?php foreach($files as $file): ?>



<pre style="display:none;">


    <?php
    $cardSplit = explode('_', $file);
    $owner = $cardSplit[0];
    $tier = $cardSplit[1];
    $cardTotal = in_array($owner, ['A','M','R','I']) && $tier == 1 ? 2 : 1;

    if (substr($tier,0, 1) == 'S') {
        $cardTotal = substr($tier,1, 1);
    }
    print_r($cardSplit);
    print_r($cardTotal);
    ?>
    </pre>

    <?php for($i=1;$i<=$cardTotal;$i++): ?>


        <?php if ($count == 0): ?>
            <table><tr>
        <?php endif ?>

        <?php if ($count == 3 || $count == 6): ?>
            </tr></tr>
        <?php endif ?>


        <?php $count++ ?>

        <td>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <img src="./cards/<?php echo $file ?>" />
        </td>

        <?php if ($count == 9): ?>
            </tr></table>

            <?php $count = 0 ?>
        <?php endif ?>
    <?php endfor ?>

<?php endforeach ?>


</body>
</html>