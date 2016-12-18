<?php
/**
 * player_edit.php
 * Date: 12/14/2016
 * Author: Jason Williamson
 */

/**
 * Update player
 */

include('header.php');
 ?>

<main>
    <form method="post" action="/tournament/update/<?=$player->id?> name="edit_form">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" />
    <label>First Name </label><input type="text" value="<?=$player->firstName?>" name="first_name"><br>
    <label>Last Name </label><input type="text" value="<?= $entry->lastName?>" name="last_name"><br>
    <label>Email </label><input type="email" value="<?=$entry->email?>" name="email"><br>
    <label>Billing Email </label><input type="email" value="<?=$entry->altEmail?>" name="altEmail"><br>
    <label>Address </label><input type="text" value="<?=$entry->city?>", <?=$entry->prov?><br>
    <label>CFC Info </label><?=$entry->memberShipOption?>, <?=$entry->CFCNumber?>, <?=$entry->rating?><br>
    <label>Age </label><?=$entry->age?><br>
    <label>Byes </label><?=$entry->byeRounds?><br>
    <label>Register Date </label><?=$entry->created_at?><br>
    <a class="button"  href="/tournament/player_edit">Edit</a>
    </form>
</main>
