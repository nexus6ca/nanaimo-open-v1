<?php
/**
 * backend.php
 * Date: 10/25/2016
 * Author: Jason Williamson
 */
// AUTH CHECK HERE

include('header.php');
?>

    <body>

    <h1>Registered Players Admin View</h1>
    <br>

    <?php
        foreach ($list as $entry) { ?>
            <div class="player_card<?php '  . $entry->lastname . $entry->firstName . '?>" style = "border:2px solid; margin-bottom: 10px;">
                <label>Name </label><?=$entry->firstName?>&nbsp<?= $entry->lastname?><br>
                <label>Email </label><?=$entry->email?><br>
                <label>Billing Email </label><?=$entry->altEmail?><br>
                <label>Address </label><?=$entry->city?>, <?=$entry->prov?><br>
                <label>CFC Info </label><?=$entry->memberShipOption?>, <?=$entry->CFCNumber?>, <?=$entry->rating?><br>
                <label>Age </label><?=$entry->age?><br>
                <label>Byes </label><?=$entry->byeRounds?><br>
            </div>
        <?php } ?>
    </table>

    </body>
<?php include('footer.php');
