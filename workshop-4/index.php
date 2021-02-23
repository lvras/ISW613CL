<?php
include("./includes/db.php");
session_start();
if(!isset($_SESSION['rol'])){
    ?>
    <script> window.location.replace("http://localhost/ISW613CL/Workshop-5/index.php");</script>
    <?php
} else {
    if($_SESSION['rol'] != 1){
        ?>
        <script> window.location.replace("http://localhost/ISW613CL/Workshop-5/index.php");</script>
        <?php
    }
}


include("./includes/header.php")
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-md-6">
            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php session_unset(); } ?>

            <form action="save_enrolment.php" method="POST">
                <div class="form-group">
                    <h1 class="h2">Select major</h1>
                    <select class="form-select mt-3" name="major" aria-label="Default select example">
                        <option selected disabled>Please select major</option>
                        <?php
                        $query = "SELECT * FROM major";
                        $result_major = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result_major)){ ?>
                            <option value="<?php echo $row['id']?>"><?php echo $row['code']?> - <?php echo $row['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="card" class="form-control" placeholder="ID" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save_enrolment" value="Save enrolment">
            </form>
        </div>
    </div>
</div>

<?php include("./includes/footer.php") ?>
