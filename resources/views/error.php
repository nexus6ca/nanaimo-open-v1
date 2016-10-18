<?php
/**
 * error.php
 * Date: 10/17/2016
 * Author: Jason Williamson
 */
include('header.php');
?>

<body>
<h1>Error registering</h1>
<p>
    <?php foreach($messages as $message) {
            echo $message;
    }?>
</p>
<a class="button" href="/tournament/add">Try to Registration again.</a
</body>
<?php
include('footer.php');
