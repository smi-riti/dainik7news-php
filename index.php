<?php include_once("config.php");

?>
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
    <!-- news -->
    <div class="m-4  ">
        <img src="images/n1.webp" class="w-full h-96" alt="">
        <a href="" class="text-4xl font-bold text-center justify-center flex mt-2">Israel Targets Hamas Tunnels In Gaza As Ground Operations Expand</a>
    </div>


    <!-- categories of news -->

    <div class="flex px-10 py-5 justify-between items-center">
        <a href="" class="text-xl font-bold justify-center items-center flex-row "><img width="50" height="50" class="text-center flex justify-center" src="https://img.icons8.com/ios-filled/50/22C3E6/news.png" alt="news" />Latest</a>
        <a href="" class="text-xl font-bold "><img width="50" height="50" src="https://img.icons8.com/ios/50/22C3E6/hockey-2.png" alt="hockey-2" />Sports</a>
        <a href="" class="text-xl font-bold justify-center items-center  flex-col text-center"><img width="50" height="50" src="https://img.icons8.com/ios/50/22C3E6/theatre-mask.png" alt="theatre-mask" />Entertainment</a>
        <a href="" class="text-xl font-bold "><img width="50" height="50" src="https://img.icons8.com/ios/50/22C3E6/classroom.png" alt="classroom" />Education</a>
        <a href="" class="text-xl font-bold "><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/22C3E6/globe-earth.png" alt="globe-earth" />World</a>
        <a href="" class="text-xl font-bold "><img width="50" height="50" src="https://img.icons8.com/external-justicon-lineal-justicon/64/22C3E6/external-politics-woman-day-justicon-lineal-justicon.png" alt="external-politics-woman-day-justicon-lineal-justicon" />Politics</a>
        <a href="" class="text-xl font-bold "><img width="50" height="50" src="https://img.icons8.com/ios/50/22C3E6/business-framework.png" alt="business-framework" />Business</a>
        <a href="" class="text-xl font-bold "><img width="50" height="50" src="https://img.icons8.com/ios/50/22C3E6/stock-share.png" alt="stock-share" />Share Bazar</a>
        <a href="" class="text-xl font-bold "><img width="50" height="50" src="https://img.icons8.com/ios/50/22C3E6/real-time-news.png" alt="real-time-news" />National</a>

    </div>
    <div class="bg-slate-100 flex flex-col flex-1 h-auto  p-10">
        <div class="grid grid-cols-5 gap-5 mt-5 ">
            <?php $callingNews = callingData("post");
            foreach ($callingNews as $value) :


            ?>
                <div class="bg-white shadow flex-1 h-auto border-slate-100">
                    <img src="images/news/<?= $value['image']; ?>" alt="">
                    <div class="p-4 flex flex-col gap-2">
                        <h2 class=" font-bold self-start px-2 py-1 rounded-full text-lg"><?= $value['heading']; ?></h2>
                        <p class="font-semibold font-sans truncate text-md"><?= $value['description']; ?></p>
                        <div class="flex px-2 py-1  items-center ">
                            <a href="view_news.php?p_id=<?=$value['p_id'];?>" class="  px-5 py-2 text-md text-white font-semibold bg-sky-300 rounded-full ">Read More <i class="bi bi-arrow-right-square-fill"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>