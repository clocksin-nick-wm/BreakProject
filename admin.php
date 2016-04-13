<?php
require_once('authenticate.php');
?>
<<<<<<< HEAD
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Eagle Ink Admin</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-yellow.min.css" />
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    </head>

    <body>
    <h2>Eagle Ink Subscribers</h2>
    <p>Below is a list of all Eagle Ink Subscribers. Use this page to remove users as needed.</p>
    <hr />
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Eagle Ink Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-yellow.min.css" />
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>
<style>
    table {
        border: double;
    }
    table > tr > th {
        border: double;
    }
</style>
<body>
<h2>Eagle Ink Subscribers</h2>
<p>Below is a list of all Eagle Ink Subscribers. Use this page to remove users as needed.</p>
<hr />
>>>>>>> e7509074b703cbfaaa22672e3bf39b0dd359780e
<?php
include('connect.php');

$query = "SELECT * FROM subscription ORDER BY id DESC";
$stmt = $dbh->prepare($query);
$stmt ->execute();
$users = $stmt->fetchAll();

echo '<table class="mdl-data-table mdl-js-data-table">';
<<<<<<< HEAD
echo '<tr><th>Name</th><th>Email</th><th>Address</th><th>School</th><th>Remove User</th></tr>';
=======
echo '<tr><th>Name</th><th>Email</th><th>Address</th><th>School</th></tr>';
>>>>>>> e7509074b703cbfaaa22672e3bf39b0dd359780e
foreach($users as $row){
    echo '<tr class="scorerow"><td>' . $row['name'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['address'] . '</td>';
    echo '<td>' . $row['school'] . '</td>';
    echo '<td><a href="removescore.php?id=' . $row['id'] . '&amp;address=' . $row['address'] .
        '&amp;name=' . $row['name'] . '&amp;email=' . $row['email'] .
        '&amp;address=' . $row['address'] . '&amp;school=' . $row['school'] .'">Remove</a></td>';
}
echo '</table>'
?>