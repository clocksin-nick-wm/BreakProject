<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Guitar Wars - High Scores Administration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>Guitar Wars - High Scores Administration</h2>
<p>Below is a list of all Guitar Wars high scores. Use this page to remove scores as needed.</p>
<hr />
​
<?php
include('connect.php');

$query = "SELECT FROM subscription ORDER BY id DESC";
$stmt = $dbh->prepare($query);
$stmt ->execute();
$users = $stmt->fetchAll();

echo '<table>';

foreach($users as $row){
    echo '<tr><td><strong>' . $row['name'] . '</strong></td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['address'] . '</td></tr>';
}
echo '</table>'
?>