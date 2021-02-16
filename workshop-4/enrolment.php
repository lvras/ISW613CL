<?php
include("./includes/db.php");

include("./includes/header.php")
?>

<div class="container">
    <div class="row">
        <div class="col mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Major</th>
                            <th>Current time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM enrolment";
                        $result_enrolment = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result_enrolment)){ ?>
                            <tr>
                                <td> <?php echo $row['name'] ?></td>
                                <td><?php echo $row['last_name'] ?></td>
                                <td> <?php echo $row['email'] ?></td>
                                <?php
                                $id_major = $row['id_major'];
                                $query_major = "SELECT * FROM major WHERE id = $id_major";
                                $result_major = mysqli_query($conn, $query_major);
                                while($row_major = mysqli_fetch_array($result_major)){ ?>
                                    <td><?php echo $row_major['code'] ?> - <?php echo $row_major['name'] ?></td>
                                <?php } ?>
                                <td> <?php echo $row['current_time'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>


<?php include("./includes/footer.php") ?>