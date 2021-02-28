<?php
    include("./includes/db.php");
    session_start();

    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                ?>
                <script> window.location.replace("http://localhost/ISW613CL/workshop-4/");</script>
                <?php
                // header("location: index.php");
            break;
            case 2:
                header('location: prueba.php');
                break;
            default:
        }
    }

    if(isset($_POST['user']) && isset($_POST['password'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user Where user = '$user' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        if($row == true){
            $rol = $row['id_rol'];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    ?>
                    <script> window.location.replace("http://localhost/ISW613CL/workshop-4/");</script>
                    <?php
                    // header("location: index.php");
                    break;
                case 2:
                    $_SESSION['user'] = $_POST['user'];
                    header('location: prueba.php');
                    break;
                default:
            }
        } else {
            echo "El usuario o contraseña son incorrectos";
        }
    }
    include("./includes/header.php");
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST">
              <div class="form-label-group">
                <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
              </div>
              <div class="form-label-group mt-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase mt-4" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
    include("./includes/footer.php");
?>