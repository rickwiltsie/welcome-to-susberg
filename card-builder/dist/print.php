<link href="https://unpkg.com/pattern.css" rel="stylesheet">

<style>
    <?php include 'style.css'; ?>
    <?php include 'stats.css'; ?>
</style>

<style>

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




    <?php
    $path = './stats/power.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    *[stat=pwr] span:before{
        background-image: url(<?=$base64 ?>);
    }
    div[power] > div:before {
        background-image: url(<?=$base64 ?>);
    }
    <?php
    $path = './stats/block.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    *[stat=blk] span:before{
        background-image: url(<?=$base64 ?>);
    }
    <?php
    $path = './stats/luck.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    *[stat=lck] span:before{
        background-image: url(<?=$base64 ?>);
    }
    div[cost] > div:before {
        background-image: url(<?=$base64 ?>);
    }

    <?php
    $path = './stats/music.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    *[stat=msc] span:before{
        background-image: url(<?=$base64 ?>);
    }

    <?php
    $path = './stats/health.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    div[health] > div:before {
        background-image: url(<?=$base64 ?>);
    }



    <?php
    $path = './stats/athlete-health.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    .athlete div[health].athlete-health > div:before {
        background-image: url(<?=$base64 ?>);
    }


    <?php
    $path = './stats/inventor-health.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    .inventor div[health] > div:before {
        background-image: url(<?=$base64 ?>);
    }


    <?php
    $path = './stats/musician-health.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    .musician div[health] > div:before {
        background-image: url(<?=$base64 ?>);
    }

    <?php
    $path = './stats/music.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    .musician div[health].music > div:before {
        background-image: url(<?=$base64 ?>);
    }

    <?php
    $path = './stats/artist-health.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    .artist div[health] > div:before {
        background-image: url(<?=$base64 ?>);
    }

    <?php
    $path = './extras/logo.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    .logo {
        background-image: url(<?=$base64 ?>);
    }

</style>