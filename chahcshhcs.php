<?php
    session_start();// khởi tạo file , truy dẫn đến file 
    $lastAccessTime = time();
    setcookie("last_access_time", $lastAccessTime, time() + (86400 * 30), "/");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csshead.css">
</head>
<body>


<div class="menu">
    
    <h1>
    Đây là header của trang

    </h1>
    <p>
        <?php 
    include "login.php";
?>
    </p>


</div>


</body>
</html>




