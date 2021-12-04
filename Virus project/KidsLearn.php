<?php 
	session_start();
	$username = $_SESSION['username'];
	date_default_timezone_set('Asia/Jerusalem');
	include './inc/db.php';
	$title = 'הסבר לילדים';
	include './inc/cnt.php';
	$href = $_SESSION['number'];
?>

<!DOCTYPE html>
<html lang="IL" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php
		if ($href == '1'){
			echo '<link id="pagestyle" rel="stylesheet" type="text/css" href="./css/css1.css">';
		}
		elseif ($href == '2'){
			echo '<link id="pagestyle" rel="stylesheet" type="text/css" href="./css/css2.css">';
		}
		elseif ($href == '3'){
			echo '<link id="pagestyle" rel="stylesheet" type="text/css" href="./css/css3.css">';
		}
		else{
			echo '<link id="pagestyle" rel="stylesheet" type="text/css" href="./css/css1.css">';
		}
	?>
	<title><?php echo $title ?></title>
</head>
<body class="kids_Page">
	<div class="username_style" style="color: #a84bf9;"><?php echo 'hellow, ' . $username;?></div><br><br>
	<!--nav = Menu-->
	<nav>
		<ul class="kids_menu">
			<li class="active"><a href="index.php"> עמוד הראשי&nbsp&nbsp </a></li>
			<li><a href="VirusHistory.php"> היסטוריית וירוסים&nbsp&nbsp </a></li>
			<li><a href="VirusVids.php"> סרטוני וירוסים&nbsp&nbsp </a></li>
			<li><a href="VirusProtect.php">הגנה בפני וירוסים&nbsp&nbsp </a></li>
		</ul>
	</nav>
	<img class="imgkids" src="https://www.midaat.org.il/wp-content/uploads/2020/04/CoronaKidsPage3.png">
	<br><br><br><br><br><br>
	<!--set Video in iframe and Video tag -->
	<video class="vid1" controls>
		<source
			src="https://2l4iau34hig51zwqxc34hod0-wpengine.netdna-ssl.com/files/2020/03/WASHING_HANDS-JR-MOVIE_HEB.mp4?_=1"
			type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div>
		<iframe class="vid2" src="https://www.youtube.com/embed/uLcV7h5PlvI"></iframe>
	</div>
</body>
</html>