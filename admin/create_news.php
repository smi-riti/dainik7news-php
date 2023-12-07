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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex justify-center items-center  px-64 py-3">
                    <div class="w-full p-6 shadow-xl rounded-md">

                        <h1 class="text-4xl font-bold  mb-4  text-indigo-950"><i class="bi bi-newspaper"></i> Create News </h1>

                        <hr>
                        <div class="mt-3">
                            <label for="" class="block m-2 text-lg">News Title</label>
                            <input type="text" name="title" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter news title here...">
                        </div>

                        <div class="mt-3 py-2 ">
                            <select name="category_id" class="block m-2 w-full border border-gray-600   py-1 text-lg">
                                <option value="" class="border w-full px-2 py-1 border-gray-600">Select your category</option>
                                <?php
                                $callingCat = callingData("categories");
                                foreach ($callingCat as $cat) :


                                    $id = $cat['cat_id'];
                                    $title = $cat['cat_title'];
                                    echo "<option value='$id'>$title</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="mt-3 ">
                            <label for="" class=" m-2 py-2 px-4  text-lg">Image</label>
                            <input type="file" name="image" class="border w-full px-2 py-4 border-gray-600">
                        </div>

                        <div class="mt-3">
                            <label for="" class="block m-2 text-lg">Author Name</label>
                            <input type="text" name="author" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter author name here...">
                        </div>
                        <div class="mt-3">
                            <label for="" class="block m-2 text-lg">Date of Creation</label>
                            <input type="date" name="date" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter date of creation here...">
                        </div>
                        <div class="mt-3">
                            <label for="" class="block m-2 text-lg">News </label>
                            
                            <textarea type="text" name="news" cols="30" rows="10" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter news news here..."></textarea>
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
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_image, "../images/news/$image");


        $data = [
            "heading" => $_POST['title'],
            "image" => $image,
            "created_at" => $_POST['date'],
            "author" => $_POST['author'],
            "description" => $_POST['news'],
            'category_id' => $_POST['category_id']
        ];
        $news = insertData("post", $data);
        if ($news) {
            alert("Inserted successfully");
            redirect("create_news.php");
        } else {
            alert("something went wrong please try again");
            redirect("create_news.php");
        }
    endif;
    ?>

</body>

</html>