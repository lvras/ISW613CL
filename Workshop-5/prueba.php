<?php
    include("./includes/db.php");
    include("./includes/header.php");
    session_start();

    if(!isset($_SESSION['rol'])){
        ?>
        <script> window.location.replace("http://localhost/ISW613CL/Workshop-5/index.php");</script>
        <?php
    } else {
        if($_SESSION['rol'] != 2){
            ?>
            <script> window.location.replace("http://localhost/ISW613CL/Workshop-5/index.php");</script>
            <?php
        }
    }

    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        echo "Bienvenido $user";
    }

include("./includes/footer.php");
?>