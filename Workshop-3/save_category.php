<?php
include("./includes/db.php");


if(isset($_POST['save_category'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO category(name, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Category saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");

}
?>