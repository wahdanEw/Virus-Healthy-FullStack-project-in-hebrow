<?php 
	session_start();
	$username = $_SESSION['username'];
	date_default_timezone_set('Asia/Jerusalem');
	include './inc/db.php';
	$title = 'היסטוריית וירוסים ';
	include './inc/cnt.php';
	include './inc/setvirushistory.php';
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
    <div class="username_style"><?php echo 'hellow, ' . $username;?></div>
	<!--nav = Menu-->
	<nav>
		<ul>
			<li class="active"><a href="index.php"> עמוד הראשי&nbsp&nbsp </a></li>
			<li><a href="KidsLearn.php"> הסבר לילדים&nbsp&nbsp </a></li>
			<li><a href="VirusVids.php"> סרטוני וירוסים&nbsp&nbsp </a></li>
			<li><a href="VirusProtect.php">הגנה בפני וירוסים&nbsp&nbsp </a></li>
		</ul>
		</div>
		<!--Select virus kinds-->
		<div class="select_place">
			<form action="" method="GET">
				<label class="label_select" for="Virus2">בחר סוג וירוס:</label>
				<select id="virus_select2" name="Virus2">
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
			</form>
		</div>

		<pre id="selected_history"></pre>
		<script src="./js/virusHistory.js"></script>
</body>
</html>