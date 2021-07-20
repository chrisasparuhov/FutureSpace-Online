<?php
include 'connect.php';
include 'functions.php';
$C = New Connection();
session_start();
check_login();
?>

<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/cards.css" rel="stylesheet" type="text/css"/>

<div class="cardframe">
    <div class="cardframe_content">
        <div style="overflow:auto;height:100%;">  <?php
            $sql0 = 'SELECT card_id FROM cards  ORDER BY card_id ASC';
            $result0 = $C->selectQuery($sql0);

            while ($row0 = $C->fetchArray($result0)) {
                $getCard = new Cards;
                echo $getCard->getCard($row0['card_id']);
            }
            ?>
        </div>
    </div>
</div>