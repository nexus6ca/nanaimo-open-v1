<?php
/**
 * header.php
 *
 * Author: Jason Williamson
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nanaimo Winter Open</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <div class="title">
        <H1> Vancouver Island University Chess Club </H1>
        <h2> Presents </h2>
        <h1> The 2016 Nanaimo Winter Open Chess Tournament</h1>
        <h5>A 5 round CFC rated Swiss December 17-18, 2016</h5>

    </div>
    <a class="button"  href="/tournament/display">Home</a>
    <?php
        if(Auth::check()) { ?>
            <a class="button" href="/tournament/backend">Admin View</a>
            <a class="button" href="/logout">Logout</a>
        <?php  } else { ?>
            <a class="button" href="/login">Admin Login</a>
        <?php } ?>
</head>
