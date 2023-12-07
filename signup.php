<?php include_once"config.php";
include_once("header.php");
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

    <form action="" method="post">
    <div class="flex justify-center items-center mt-8">
        <div class="w-96 p-6 shadow-xl rounded-md">
            
            <h1 class="text-4xl font-bold text-center  text-indigo-950"><i class="bi bi-file-person-fill"></i>Signup</h1>
            
            <hr>
            <div class="mt-3">
                <label for="" class="block m-2 text-lg">Username</label>
                <input type="text" name="name" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter username here...">
            </div>
            <div class="mt-3">
                <label for="" class="block m-2 text-lg">Email</label>
                <input type="email" name="email" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter email here...">
            </div>
            <div class="mt-3">
                <label for="" class="block m-2 text-lg">Password</label>
                <input type="password" name="password" class="border w-full px-2 py-1 border-gray-600" placeholder="Enter password here...">
            </div>
            
            <div class="mt-3">
                
                <input type="submit" name="send" class="border w-full px-2 py-1 font-semibold bg-indigo-950 text-white text-xl border-gray-600" value="Signup">
            </div>
        </div>
        
    </div>
    </form>
    <?php
        if(isset($_POST['send'])){
            $data = [
                'name'=>$_POST['name'],
                'password'=>md5($_POST['password']),
                'email'=>$_POST['email']
            ];
            $signedup = insertData("user",$data);
            if($signedup){
                redirect("login.php");
            }
            else{
                alert("something went wrong please try again...");
            }
        }
    ?>
</body>
</html>