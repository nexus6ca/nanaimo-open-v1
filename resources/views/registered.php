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
<header>
    <div class="title">
        <H1> Vancouver Island University Chess Club </H1>
        <h2> Presents </h2>
        <h1> The 2016 Nanaimo Winter Open Chess Tournament</h1>
        <h5>A 5 round CFC rated Swiss December 17-18, 2016</h5>
    </div>
</header>
<body>
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



