<!DOCTYPE html>
    <html>
<head>
    <title>Eagle Ink Submission</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-yellow.min.css" />
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>
<body>
<style>
    form > input{
        margin-top: 100px;
    }
</style>
<?php
include('nav.php');
include('connect.php');
 ?>
<form action="submit.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="product">Product Name</label><br>
    <input type="text" name="product">
    <input id="screenshot" type="file">
    <button type="submit" id="submit">Submit</button>
</form>
</body>
</html>