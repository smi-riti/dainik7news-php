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

    <div class="container-fluid w-100 mt-5">
        <div class="row">
            <div class="col-3">
                <?php include_once "sidebar.php"; ?>

            </div>
            <div class="col-9">
                <div class="row">
                    <table class="table table-bordered  table-hover table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>category</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>News</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $callingData = callingData("post JOIN categories on post.category_id = categories.cat_id");
                            foreach ($callingData as $value) :
                            ?>

                                <tr>
                                    <td><?= $value['p_id']; ?></td>
                                    <td class="text-truncate"><?= substr($value['heading'],0,15);?></td>
                                    <td><?= $value['cat_title']; ?></td>
                                    <td><?= $value['author']; ?></td>

                                    <td>
                                        <img width="80px" height="auto" src="../images/news/<?= $value['image']; ?>" alt="">
                                    </td>
                                    <td><?= $value['created_at']; ?></td>
                                    <td class="d-inline-block text-truncate">
    <?= substr($value['description'], 0, 30); ?>
</td>

                                    <td>
                                        <div class="btn-group">

                                            <a href="?news_delete=<?= $value['p_id']; ?>" class="btn btn-danger">Delete</a>
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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_GET['news_delete'])) {
    $id = $_GET['news_delete'];
    if (deleteRecord('post', "p_id='$id'")) {
        redirect("manage_news.php");
    } else {
        alert("fail to delete");
    }
}
?>