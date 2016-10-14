<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 10/12/2016
 * Time: 11:40 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nanaimo Winter Open - Registered Players</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
<h1>Registered Players</h1>
<br>
<table>
    <th>Name</th><th>Rating</th><th>City</th>
    <?php
        foreach ($registered as $entry) { ?>
        <tr>
            <td><?=$entry->firstName . " " . $entry->lastName?></td>
            <td><?=$entry->rating?></td>
            <td><?=$entry->city?></td>
        </tr>
        <?php } ?>
</table>



