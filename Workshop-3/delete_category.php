<?php
include("./includes/db.php");

if (isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "DELETE FROM category WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Category removed successfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}
?>