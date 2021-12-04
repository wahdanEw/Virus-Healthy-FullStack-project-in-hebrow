<?php 
	session_start();
	$username = $_SESSION['username'];
	date_default_timezone_set('Asia/Jerusalem');
	include './inc/db.php';
	$title = 'מידע עלינו';
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
<body>
	<div class="username_style"><?php echo 'hellow, ' . $username;?></div><br><br>
	<!--nav = MENU-->
	<nav>
		<ul>
			<li class="active"><a href="index.php"> עמוד הראשי&nbsp&nbsp </a></li>
			<li><a href="VirusHistory.php"> היסטוריית וירוסים&nbsp&nbsp </a></li>
			<li><a href="KidsLearn.php"> הסבר לילדים&nbsp&nbsp </a></li>
			<li><a href="VirusVids.php"> סרטוני וירוסים&nbsp&nbsp </a></li>
			<li><a href="VirusProtect.php">הגנה בפני וירוסים&nbsp&nbsp </a></li>
		</ul>
	</nav>
	<section class="my_text">
		<h1 class="h1_a">about me</h1>
		<p class="selection_p">
			ברוכים הבאים, מטרת האתר לתת מידע על הנגיפים מסוגים שונים כל המידע נלקח על ידי איסוף מידע ומחקרים מאתרי
			אינטרנט שונים , כמו ויקיפדיה ואתרי רפואה ועוד..
			אתר זה בשביל להקל עליכם למצוא ולקבל מידע על סוגים שונים של הנגיפים באתר אחד ובצורה מסודרת ולתת מידע על אך
			להגן את עצמנו בפני מחלות נגיפים ושמירה על הבריאות.
		</p>
	</section>
	<br><br>
	<div class="arrow_parent">
		<div class="left_arrow"></div>
		<div class="right_arrow"></div>
		<div class="top_arrow"></div>
		<div class="bottom_arrow"></div>
	</div>
	<footer>
		<p>Author: Wahdan<br>
			<a class="email" href="Wahdan@gmail.com">Wahdan@gmail.com</a>
		</p>
	</footer>
	<div class="logo_size">
		<img src="data:image/jpeg;base64,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"
			alt="stay safe" title="Stay&Safe" class="logo2">
	</div>
</body>
</html>