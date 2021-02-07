<?php
include("./includes/db.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM category WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $description = $row['description'];
    }
}

if (isset($_POST['update'])){
    $id = $_GET['id'];
    $name = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE category set name = '$name', description = '$description' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Category updated successfully';
    $_SESSION['message_type'] = 'primary';

    header("Location: index.php");
}

?>

<?php include("./includes/header.php")?>

<div class="container pt-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $name;?>" class="form-control" placeholder="Update name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Update description"><?php echo $description; ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("./includes/footer.php")?>