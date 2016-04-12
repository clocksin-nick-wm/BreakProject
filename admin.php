<?php
require_once('authenticate.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Eagle Ink Admin</title>
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
<?php
include('connect.php');

$query = "SELECT * FROM subscription ORDER BY id DESC";
$stmt = $dbh->prepare($query);
$stmt ->execute();
$users = $stmt->fetchAll();

echo '<table>';
echo '<tr><th>Name</th><th>Email</th><th>Address</th><th>School</th></tr>';
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