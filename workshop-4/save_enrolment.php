<?php
include("./includes/db.php");

if(isset($_POST['save_enrolment'])){
    $card = $_POST['card'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $major = $_POST['major'];

    $query = "INSERT INTO enrolment(card, name, last_name, email, id_major) VALUES ('$card', '$name', '$last_name', '$email', '$major')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Enrolment saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>