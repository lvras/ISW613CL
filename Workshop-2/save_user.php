<?php

include("includes/db.php");
include("person.php");

if (isset($_POST['save_user'])){
    $name = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];

    $query = "INSERT INTO usuario(first_name, last_name, email) VALUES ('$name', '$lastName', '$email')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }

    echo 'saved';
}

include("includes/header.php")
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['get_user'])){
        $query = "SELECT * FROM usuario";
        $result = mysqli_query($conn, $query);
        if(isset($result)){
            foreach ($result as $key) {
                $Persona = new Person($key['id'], $key['first_name'], $key['last_name'], $key['email']);
                echo '<tr>';
                echo '<th scope="row">' . $key['id'] . '</th>';
                echo '<td>' . $key['first_name'] . '</td>';
                echo '<td>' . $key['last_name'] . '</td>';
                echo '<td>' . $key['email'] . '</td>';
                echo '</tr>';
            }
        } else {
            echo 'Register user';
        }
    }
    ?>
  </tbody>
</table>

<?php include("includes/footer.php")?>