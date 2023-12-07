<?php include_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dainik7.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <?php include_once "header.php"; ?>
    <div class="container w-100 mt-5">
        <div class="row">
            <div class="col-3">
                <?php include_once "sidebar.php"; ?>

            </div>
            <div class="col-9">

                <table class="table table-bordered  table-hover table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $callingData = callingData("user");
                        foreach ($callingData as $value) :
                        ?>

                            <tr>
                                <td><?= $value['id']; ?></td>
                                <td><?= $value['name']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['password']; ?></td>


                                <td>
                                    <div class="btn-group">

                                        <a href="?user_delete=<?= $value['id']; ?>" class="btn btn-danger">Delete</a>
                                        <a href="" class="btn btn-success">Edit</a>
                                    </div>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_GET['user_delete'])) {
    $id = $_GET['user_delete'];
    if (deleteRecord('user', "id='$id'")) {
        redirect("manage_user.php");
    } else {
        alert("failed to delete");
    }
}
?>