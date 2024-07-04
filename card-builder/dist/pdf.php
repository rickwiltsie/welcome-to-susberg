<!DOCTYPE html>
<html>
<head>
    <title>PDF Builder</title>
    <meta charset="utf-8" />

    <style>
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
$files = scandir('./cards');
unset($files[count($files) - 1]);
unset($files[2]);
unset($files[1]);
unset($files[0]);
$count = 0;
?>

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