<?php include_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dainik7.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-slate-200">

    <?php include_once "header.php"; ?>
    <div class="flex justify-between">
    <div class="w-1/6 px-2 py-3 ">
    <div class="flex flex-col m-10 gap-2">
    <div class="flex gap bg-sky-300 text-xl justify-center font-black items-center text-white  rounded-lg hover:bg-white/[0.1] px-6 py-3 mr-3 hover:text-white">
        <a href="" class="text-md">News Categories</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="../admin/manage_news.php" class="text-md">Latest News</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="../admin/manage_categories.php" class="text-md">Sports</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="../admin/create_news.php" class="text-md">Educational</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="../admin/create_categories.php" class="text-md">Politicis</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="manage_user.php" class="text-md">World</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="manage_user.php" class="text-md">Business</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="manage_user.php" class="text-md">Natinal</a>
    </div>
    <div class="flex gap bg-sky-300 font-semibold text-lg justify-center items-center text-white  rounded-lg hover:bg-white/[0.1]px-4 py-3 mr-3 hover:text-white">
        <a href="manage_user.php" class="text-md">Share Bazar</a>
    </div>
</div>
    </div>
    <div class="w-5/6 py-10 px-4 ">
        <div class="flex flex-col px-8 py-5 mb-2 bg-white">
            <?php 
            if(isset($_GET['p_id'])):
                $id = $_GET['p_id'];
                $callingNews=callingData("post","p_id='$id'");
                $callingNews = $callingNews[0];
            ?>
            <h1 class="text-3xl font-bold "><?= $callingNews['heading'];?></h1>
            <img src="images/news/<?= $callingNews['image'];?>" class="w-full height-96" alt="">
            <p class="font-semibold text-gray-400"><?= $callingNews['description'];?> </p>
            <?php endif;?>
        </div>
    </div>
    </div>
    
</body>

</html>