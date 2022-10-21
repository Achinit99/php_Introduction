<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
 HTML
 Multiline
 Comment 
-->
<form method="get">
    <input type="text" name="userchannel">
    <button type="submit">Submit</button>
</form>

<?php
/*
 PHP
 Multiline 
 Comment
 */
$myname = $_GET ['userchannel']; // Comment
echo $myname." is an awesome Channel";

?>
</body>
</html>
