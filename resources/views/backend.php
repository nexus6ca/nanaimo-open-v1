<?php
/**
 * backend.php
 * Date: 10/25/2016
 * Author: Jason Williamson
 */

include('header.php');
?>

    <body>

    <h1>Registered Players Admin View</h1>
    <br>

    <?php
        foreach ($list as $entry) { ?>
            <div class="player_card<?=$entry->id?>" style = "border:2px solid; margin-bottom: 10px;">
                <label>Name </label><?=$entry->firstName?>&nbsp<?= $entry->lastname?><br>
                <label>Email </label><?=$entry->email?><br>
                <label>Billing Email </label><?=$entry->altEmail?><br>
                <label>Address </label><?=$entry->city?>, <?=$entry->prov?><br>
                <label>CFC Info </label><?=$entry->memberShipOption?>, <?=$entry->CFCNumber?>, <?=$entry->rating?><br>
                <label>Age </label><?=$entry->age?><br>
                <label>Byes </label><?=$entry->byeRounds?><br>
                <label>Register Date </label><?=$entry->created_at?><br>
            </div>
        <?php } ?>
    </body>
<?php include('footer.php');
