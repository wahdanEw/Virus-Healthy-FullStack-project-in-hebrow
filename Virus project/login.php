<?php 
	session_start();
	$title = 'טופס התחברות';
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
	<!--Login page using POST method-->
	<section class="login_page_place">
		<form action="./inc/login_code.php" method="POST">
			<label class="usrer_passwd_Label" for="username">שם משתמש:</label></b><br>
				<input type="text" name="username" placeholder="Username/Email..."><br><br>
			<label class="usrer_passwd_Label" for="passwd2">סיסמה:</label></b><br>
				<input type="password" name="password" placeholder="Password..."><br>
			<input class="login_submit" type="submit" value="כניסה">
		</form>
		<br><br>
		<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo '<div style="color:#ff8181; font-family:cursive; text-align: center;"><span style="color:red;">****************</span><br>
				<span style="color:red;">*</span>!Fill in all fields<span style="color:red;">*</span><br>
				<span style="color:red;">****************</span></div>';
			}
			else if($_GET["error"] == "wronglogin"){
				echo '<div style="color:white; font-family:cursive; text-align: center;"><span style="color:red;">**************************</span><br>
				<span style="color:red;">*</span>!incorrect login information<span style="color:red;">*</span><br>
				<span style="color:red;">**************************</span></div>';
			}
		}
		?>
	</section>
	<a class="button_forgot_passwd" href="forgetPassw.php">שכחתי סיסמה</a>
	<!--Forgot password button-->
	<div class="button_place_home">
		<a class="button_home" href="index.php">עמוד הראשי</a>
	</div>
</body>
</html>