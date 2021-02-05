<?php
//Option 1
$conn = mysqli_connect('127.0.0.1', 'root', '', 'workshop2');

if (isset($conn)) {
    // echo 'DB is connected';
} else {
    // echo 'DB is not connected';
}

// Option 2
//   $server = "127.0.0.1";
//   $user = "root";
//   $pass = "";
//   $db = "prueba";

//   $conexion = new mysqli($server, $user, $pass, $db);
?>
