<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 10/12/2016
 * Time: 11:40 PM
 */
include('header.php');
?>

<body>

<?php if(Session::has('success')): ?>
    <div class="alert-success">
        <strong>Registered!</strong> <?php echo Session::get('message', ''); ?>
        <p><figure class="paypal">
                <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="left"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.me/nanaimoopen/35','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" border="0" alt="PayPal Logo"></a></td></tr></table><!-- PayPal Logo -->
            </figure></p>
    </div>
<?php endif; ?>

<h1>Registered Players</h1>
<br>
<table>
    <th>Name</th><th>Rating</th><th>City</th>
    <?php
        foreach ($registered as $entry) { ?>
        <tr>
            <td><?=$entry->firstName?>&nbsp<?= $entry->lastname?></td>
            <td><?=$entry->rating?></td>
            <td><?=$entry->city?></td>
        </tr>
        <?php } ?>
</table>

</body>
<?php include('footer.php');


