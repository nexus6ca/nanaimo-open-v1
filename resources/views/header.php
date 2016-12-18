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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
            selector: 'textarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });;
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <div class="title">
        <H1> Vancouver Island University Chess Club </H1>
        <h2> Presents </h2>
        <h1> The 2016 Nanaimo Winter Open Chess Tournament</h1>
        <h5>A 5 round CFC rated Swiss December 17-18, 2016</h5>

    </div>
    <a class="button"  href="/tournament/display">Home</a>
    <a class="button" href="/tournament/results">Results and Pairings</a>
    <a class="button" href="/tournament/registered">Who is registered</a>
    <?php
        if(Auth::check()) { ?>
            <a class="button" href="/tournament/backend">Admin View</a>
            <a class="button" href="/logout">Logout</a>
        <?php  } ?>

</head>
