<?php
include('connect.php');
if(isset($_POST['formSubmit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    print_r($_POST);
    $query = "INSERT INTO subscription VALUES (0, :name, :email, :address)";
    $stmt = $dbh->prepare($query);
    $result = $stmt->execute(
        array(
            'name' => $name,
            'email' => $email,
            'address' => $address,
        )
    );
    echo "There is a new emil in your inbox";
    $to = $email;
    $subject = "You are now Subscribed";
    $from = "netflixbeing@yahoo.com";
    $msg = "Thank you $name for subscribing to Netflix Break. We will email you weekly news on trending series on Netflix.";
    mail($to, $subject, $msg, 'From:' . $from);
}
?>