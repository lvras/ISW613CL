<?php
include("./includes/db.php");

include("./includes/header.php");
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_category.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Category name" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Category description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_category" value="Save Category">
                </form>
            </div>
        </div>

        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM category";
                        $result_categorys = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result_categorys)){ ?>
                            <tr>
                                <td> <?php echo $row['name'] ?></td>
                                <td> <?php echo $row['description'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                                    <a href="delete_category.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

<?php include("./includes/footer.php")?>