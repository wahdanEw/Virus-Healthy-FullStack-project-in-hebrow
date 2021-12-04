<?php 
	session_start();
	$username = $_SESSION['username'];
    date_default_timezone_set('Asia/Jerusalem');
	include './inc/db.php';
	$title = 'קונפיגורציה - נגישות';
    include './inc/cnt.php';
?>

<!DOCTYPE html>
<html lang="IL" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="pagestyle" rel="stylesheet" type="text/css" href="./css/css1.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="username_style"><?php echo 'hellow, ' . $username;?></div><br><br>
    <nav>
        <ul>
            <li class="active"><a href="index.php">עמוד הראשי</a></li>
        </ul>
    </nav>
    <!-- <section>
        <h2 class="b">תיאום עיצוב:</h2>
        <div class="buttons_place2">
            <button class="button_style" onclick="swapStyleSheet('./css/css1.css')">מצב רגיל</button><br><br>
            <button class="button_style" onclick="swapStyleSheet('./css/css2.css')">גודל גופן</button><br><br>
            <button class="button_style" onclick="swapStyleSheet('./css/css3.css')">שחור-לבן</button>
        </div>
    </section> -->

    <section>
        <div class="dropdown">
            <a class="dropbtn">
                <img class="im2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS-ogtYSZ6q0kepetW_fc7Mf4LiaNAnGiJQxpMA0L9FR59ytLw1fP-LgTNyVUup6u1Odc&usqp=CAU" alt="נגישות">
            </a>
            <div class="dropdown-content">
                <a class="active" onclick="swapStyleSheet('./css/css1.css')">מצב רגיל</a>
                <a onclick="swapStyleSheet('./css/css2.css')">גודל גופן</a>
                <a onclick="swapStyleSheet('./css/css3.css')">שחור-לבן</a>
            </div>
        </div>
    </section>

    <script src="./js/swapStylesheet.js"></script>
</body>
</html>