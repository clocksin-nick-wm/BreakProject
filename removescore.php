<?php
require_once('authorization.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Guitar Wars - Remove a High Score</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>Guitar Wars - Remove a High Score</h2>
​
<?php
require_once('connect.php');
if (isset($_GET['id']) && isset($_GET['date']) && isset($_GET['name']) && isset($_GET['score']) && isset($_GET['screenshot'])) {
    // Grab the score data from the GET
    $id = $_GET['id'];
    $school = $_GET['school'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $email = $_GET['email'];
}
else if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['school'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $school = $_POST['school'];
}

else {
    echo '<p class="error">Sorry, no high score was specified for removal.</p>';
}
​
if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
        $query = "DELETE FROM subscription WHERE id = $id LIMIT 1";
       $stmt = $dbh -> prepare($query);

        // Confirm success with the user
        echo '<p>The subscription for ' . $name . ' was successfully removed.';
    }
    else {
        echo '<p class="error">The subscription was not removed.</p>';
    }
}
else if (isset($id) && isset($name) && isset($school) && isset($address) && isset($email)) {
    echo '<p>Are you sure you want to delete the following high score?</p>';
    echo '<p><strong>Name: </strong>' . $name . '<br /><strong>Date: </strong>' . $address .
        '<br /><strong>Score: </strong>' . $email . '</p>';
    echo '<form method="post" action="removescore.php">';
    echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
    echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
    echo '<input type="submit" value="Submit" name="submit" />';
    echo '<input type="hidden" name="id" value="' . $id . '" />';
    echo '<input type="hidden" name="name" value="' . $name . '" />';
    echo '<input type="hidden" name="score" value="' . $address . '" />';
    echo '</form>';
}

echo '<p><a href="admin.php">&lt;&lt; Back to admin page</a></p>';
?>
​
</body>
</html>