<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Edit User</h1>
            <p class="lead">Edit existing user</p>
            <hr class="my-4">
        </div>
        <form method="post" action="<?php echo site_url('user/save/'.$user->id);?>">
            <div class="form-group">
                <label for="user">User</label>
                <input id="user" class="form-control" type="text" name="user"
                    value="<?php echo $user->user ?>">
            </div>
            <button type="submit" class="btn btn-primary"> Save </button>
        </form>
    </div>
</body>

</html>