<?php include("includes/db.php") ?>
<?php include("includes/header.php")?>

<h1 class="ml-4">User information</h1>
<div class="container-fluid">
    <form action="save_user.php" method="POST">
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input id="first-name" class="form-control col-3" type="text" name="first-name">
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input id="last-name" class="form-control col-3" type="text" name="last-name">
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input id="email" class="form-control col-3" type="email" name="email">
        </div>
        <button class="btn btn-secondary" type="submit" name="save_user">Save</button>
        <button class="btn btn-secondary ml-3" type="submit" name="get_user">Get</button>
    </form>
</div>

<?php include("includes/footer.php")?>