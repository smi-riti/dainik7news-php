<?php include_once "../config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dainik7 Login page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <?php include_once "header.php"; ?>
    <div class=" flex">
        <div class="w-1/6">
            <?php include_once "sidebar.php"; ?>
        </div>

        <div class="w-5/6">
            <form action="" method="post">
                <div class="flex justify-center items-center m-32">
                    <div class="w-full p-6 shadow-xl rounded-md">

                        <h1 class="text-4xl font-bold  mb-4  text-indigo-950"><i class="bi bi-menu-button-wide-fill"></i> News Categories</h1>

                        <hr>
                        <div class="mt-3">
                            <label for="" class="block m-2 text-lg">News Type</label>
                            <input type="text" name="type" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter news type here...">
                        </div>


                        <div class="mt-3">

                            <input type="submit" name="send" class="border w-full px-2 py-1 font-semibold bg-indigo-950 text-white text-xl border-gray-600" value="Submit">
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['send'])) :

        $data = [
            "cat_title" => $_POST['type']
        ];
        $cat = insertData("categories", $data);
        if ($cat) {
            alert("Inserted successfully");
            redirect("create_categories.php");
        } else {
            alert("something went wrong please try again");
            redirect("create_categories.php");
        }
    endif;
    ?>

</body>

</html>