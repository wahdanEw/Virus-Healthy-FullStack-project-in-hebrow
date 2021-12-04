<?php 
	session_start();
	$username = $_SESSION['username'];
	date_default_timezone_set('Asia/Jerusalem');
	include './inc/db.php';
	$title = 'סרטוני וירוסים' ;
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
	<!--nav = Menu-->
	<nav>
		<ul>
			<li class="active"><a href="index.php"> עמוד הראשי&nbsp&nbsp </a></li>
			<li><a href="VirusHistory.php"> היסטוריית וירוסים&nbsp&nbsp </a></li>
			<li><a href="KidsLearn.php"> הסבר לילדים&nbsp&nbsp </a></li>
			<li><a href="VirusProtect.php">הגנה בפני וירוסים&nbsp&nbsp </a></li>
		</ul>
		</div>
		<!--Select virus kind-->
		<div class="select_place">
			<label class="label_select" for="Virus">בחר סוג וירוס:</label>
			<select id="virus_select" name="Virus">
				<option value="" selected>בחר</option>
				<option value="COVID19">נגיף הקורונה</option>
				<option value="Lassa">נגיף לאסה</option>
				<option value="Influenza">נגיפי שפעת</option>
				<option value="Mumps">נגיף החזרת</option>
				<option value="Rabies">נגיף כלבת</option>
				<option value="Ebolavirus">נגיף האבולה</option>
				<option value="Measles">נגיף החצבת</option>
				<option value="SwineFlu">שפעת החזירים</option>
				<option value="HIV">וירוס HIV</option>
				<option value="cancer">סרטן</option>
			</select>
		</div>
	<div id="selected_video"></div>
	<script src="./js/virusVids.js"></script>
</body>
</html>