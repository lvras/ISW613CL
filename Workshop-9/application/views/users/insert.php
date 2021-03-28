<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Add User</h1>
            <p class="lead">Add a new user</p>
            <hr class="my-4">
        </div>
        <form method="post" action="<?php echo site_url('user/insert');?>">
            <div class="form-group">
                <label for="user">User</label>
                <input id="user" class="form-control" type="text" name="user">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                <label for="id_rol">id_rol</label>
                <input id="id_rol" class="form-control" type="text" name="id_rol">
            </div>
            <button type="submit" class="btn btn-primary"> Login </button>
        </form>
    </div>
</body>

</html>