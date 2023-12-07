<?php include_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dainik7.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <?php include_once "header.php"; ?>
    <div class="flex col">
        <div class="w-1/6">
            <?php include_once "sidebar.php"; ?>
        </div>
        <div class="w-5/6 text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <a href="" class="">
           <div class="flex justify-between  m-4 items-center">
           <img src="../images/logo5.png" class="max-w-xs  mb-0 object-cover h-12 items-center " alt="">
            <h1 class="text-indigo-950 text-2xl font-bold text-sans "> DAINIK7 Admin</h1>
           </div>
        </a>
                    <p class="lg:w-1/2 w-full leading-relaxed text-xl mt-0 font-semibold text-gray-500">Your Trusted Gateway to the universe's latest news</p>
                </div>
                
                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg  bg-red-400">
                            <h2 class="text-lg text-gray-900 font-semibold  mb-2">Total CATEGORY</h2>
                            <p class="leading-relaxed text-2xl text-gray-200 font-black"><?= countRecords("categories")?></p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg  bg-red-400">
                            <h2 class="text-lg text-gray-900 font-semibold  mb-2">Total NEWS</h2>
                            <p class="leading-relaxed text-2xl text-gray-200 font-black"><?= countRecords("post")?></p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg  bg-red-400">
                            <h2 class="text-lg text-gray-900 font-semibold  mb-2">Total USER</h2>
                            <p class="leading-relaxed text-2xl  text-gray-200  font-black"><?= countRecords("user")?></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

</body>

</html>