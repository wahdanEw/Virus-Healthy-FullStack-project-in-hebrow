<?php 
	session_start();
	date_default_timezone_set('Asia/Jerusalem');
	include './inc/db.php';
	include './inc/delete.php';
	include './inc/comments.php';
	$title = 'נגיפים & הבריאות';
	include './inc/cnt.php';
	$username = $_SESSION['username'];
	$href = $_SESSION['number'];
?>

<!DOCTYPE html>
<html lang="IL" dir="rtl">
<!--lang for let the browser know which language we use in this page + make the font right to left by dir command-->
<head>
	<meta charset="UTF-8"> <!-- a web browser must know the character set used in the page.-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--allows you to run the site on other devices and see it properly-->
	<meta name="description"content="וירוס, או בשמו הנוסף נגיף, הוא חלקיק זעיר שמסוגל להתרבות רק בתוך תא חי של אורגניזם אחר.">
	<!--meta description (for view in google seacrh first the title and udner the title  what we write in this content)-->
	<title><?php echo $title ?></title>
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
</head>
<body>
	<!--nav = the menu-->
	<nav class="menu-nav">
		<ul>
			<li class="active"><a href="VirusHistory.php"> היסטוריית וירוסים&nbsp&nbsp </a></li>
			<li><a href="KidsLearn.php"> הסבר לילדים&nbsp&nbsp </a></li>
			<li><a href="VirusVids.php"> סרטוני וירוסים&nbsp&nbsp </a></li>
			<li><a href="VirusProtect.php">הגנה בפני וירוסים&nbsp&nbsp </a></li>
			<li><a href="AboutUs.php">מידע עלינו&nbsp&nbsp </a></li>
		</ul>
	</nav>
	<aside>
	<form action="./inc/checkconfiguration.php" method="POST">
			<div class="dropdown">
				<a class="dropbtn">
					<img class="conlogo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS-ogtYSZ6q0kepetW_fc7Mf4LiaNAnGiJQxpMA0L9FR59ytLw1fP-LgTNyVUup6u1Odc&usqp=CAU" alt="נגישות">
				</a>
					<div class="dropdown-content">
						<select name="number" id="number">
							<option value="1">מצב רגיל</option>
							<option value="2">גודל גופן</option>
							<option value="3">שחור-לבן</option>
						</select>
					</div>
			</div>
			<div class="congfbutton">
				<input class="congfbtn" type="submit" name="submit" value="הגדר" />
			</div>
		</form>
	</aside>
	<?php
		if(isset($username)){
			echo '<div class="username_style">
					hellow, ' . $username . '
				</div><br>';
			echo'<aside class="logregout">
					<div class="btn_logout_place">
						<a href="logout.php" class="logout">Logout</a><br>
					</div>
				</aside>';
		}
		else{
			echo'<br><br><aside class="logregout">
					<div class="btn_Registry_place">
						<a class="btn_registry" href="Register.php">הרשמה</a><br><br>
					</div>
				</aside>';
			echo'<aside class="logregout">
					<div class="btn_login_place">
						<a class="btn_login" href="login.php">כניסה</a>
					</div>
				</aside>';
		}
	?>
	<!-- <aside class="logregout"></aside> -->
		<br><br><br><br><br>
	<div class="date_style">
		<strong id="date"></strong>
	</div>
	<aside class="corona_vid_place">
		<iframe class="corona_vid_live" src="https://www.youtube.com/embed/NMre6IAAAiU" title="YouTube video player"
			frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
			allowfullscreen></iframe>
	</aside>
	<br><br>
	<!--section head of text  +text-->
	<section>
		<h1>
			<ins>מידע כללי Virus</ins>
		</h1>
		<pre id="text">
	    וירוס, או בשמו הנוסף נגיף, הוא חלקיק זעיר שמסוגל להתרבות רק בתוך תא חי של אורגניזם אחר. וירוס יכול לכוון את מנגנון התא שלו 
	להתרבות ולייצר עוד נגיפים, ואלו מזהמים בעלי-חיים, צמחים ומיקרואורגניזמים
	    שעטופה בקליפה חלבונית (RNA) או רנ"א (DNA) וירוס מורכב מחומצת גרעין דנ"א.

	ישנם סוגים של וירוסים והם גורמים למחלות מדבקות רבות בהן:
	    הצטנות, שפעת, חצבת, חזרת, אבעבועות רוח, שלבקת חוגרת (הרפס), איידס, שיתוק ילדים, כלבת ועוד...
	
	    "ומשמעותה המקורית "רעל virus המילה וירוס מקורה בלטינית 	
	    המילה העברית "נגיף" נגזרה בעברית החדשה מהמילים נֶגֶף ומַגֵּפָה, מהשורש נג"ף שמשמעותו מכה, מכשול.
			</pre>
	</section>
	<br>
	<!--textarea for Write an opinion-->
	<section>
		<?php
			if(isset($_SESSION['username'])){
				echo '<form action="'.setComments($conn).'" method="POST">
					<label class="label_txt_area" for="message">כתבו לנו חוות דעת:</label><br>
					<input type="hidden" name="username" value="'.$_SESSION["username"].'">
					<input type="hidden" name="date" value="'.date("Y-m-d H:i:s").'">
					<textarea class="txt_area_placholder" name="message" placeholder="דרג במילים"></textarea><br>
					<div class="commet-txtarea-parent">
						<button type="submit" name="commentSubmit" class="commet-txtarea-son">Comment</button>
					</div>
				</form>';
			}else{
				echo '<p class="user-message-Forcomment">*אתה צריך להיות מחובר כדי להגיב ולרשום חוות דעת*!</p>';
			}
			getComments($conn);
		?>
	</section>	<!-- <input class="submit2_txt_area" type="submit" value="שלח">-->
	<!--configuration page-->
	<!-- <aside>
		<a href="Configuration.php">
			<img class="configuration_logo"
				src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS-ogtYSZ6q0kepetW_fc7Mf4LiaNAnGiJQxpMA0L9FR59ytLw1fP-LgTNyVUup6u1Odc&usqp=CAU"
				alt="נגישות">
		</a>
	</aside> -->
	<script src="./js/date.js"></script>
</body>
</html>