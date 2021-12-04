<?php 
	session_start();
	include './inc/db.php';
	include './inc/form.php';
	mysqli_close($conn);
	
	$href = $_SESSION['number'];
?>
<!DOCTYPE html>
<html lang="IL" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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
	<title>הרשמה</title>
</head>
<body class="background_image">
	<!--Registry command using POST method-->

	<section>
		<!-- <form action="./inc/register_form.php" onsubmit="return validateForm()" method="POST"> -->
		<form id="form" action="./inc/register_form.php" method="POST">
			<div class="form-control">
				<br>
				<label for="fname">שם פרטי:</label><br>
				<input id="firstname" type="text" placeholder="הזן שם פרטי" name="fname" maxlength="10" require autofocus/><br>
				<div id="alert">
  					<span class="closebtn">&times;</span>  
						<div id="msg-error"></div>
				</div>
			</div><br>
			
			 <div class="form-control">
				<label for="lname">שם משפחה:</label><br>
				<input  id="lastname" type="text" placeholder="הזן שם משפחה" name="lname" maxlength="10" autofocus />
				<div id="alert2">
  					<span class="closebtn">&times;</span>  
						<div id="msg-error2"></div>
				</div>
			</div><br>

			<div class="form-control">
				<label for="adress">מגורים:</label><br>
				<input id="adress" type="text" placeholder="הזן מקום מגורים" name="adress" maxlength="20" /><br>
				<div id="alert3">
  					<span class="closebtn">&times;</span>  
						<div id="msg-error3"></div>
				</div>
			</div><br>

			<div class="form-control">
				<label for="age">גיל:</label><br>
				<input id="age" type="number" placeholder="הזן גיל" name="age" maxlength="2"  /><br>
				<div id="alert4">
  					<span class="closebtn">&times;</span>  
						<div id="msg-error4"></div>
				</div>
			</div><br>

			<div class="form-control">
				<label for="username">שם משתמש:</label><br>
				<input id="username" type="text" placeholder="הזן שם משתמש" name="username" maxlength="15" /><br>
				<div id="alert5">
  					<span class="closebtn">&times;</span>  
						<div id="msg-error5"></div>
				</div>
			</div><br>

			<div class="form-control">
				<label for="password">סיסמה:</label><br>
				<input id="passwd"  type="password" placeholder="הזן סיסמה" name="password" minlength="8" maxlength="20" /><br>
				<div id="alert6">
  					<span class="closebtn">&times;</span>  
						<div id="msg-error6"></div>
				</div><br>
			</div>

			<div class="form-control">	
				<label for="Email">מייל:</label><br>
				<input id="email" type="email" placeholder="הזן כתובת מייל" name="Email" maxlength="30" /><br>
				<div id="alert7">
  					<span class="closebtn">&times;</span>  
						<div id="msg-error7"></div>
				</div>
			</div>

			<label for="gender">מין:</label>
				<select name="gender" style="font-size:60%" >
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="other">other</option>
				</select><br>
			<br>
			<input id="submit" class="registry_button" type="submit" name="submit" value="Register">
			<input class="reset_button" type="reset" value="Reset">
		</form>
	</section>
	<br><br><br>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="./js/registryValid.js"></script>
	<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo '<div style="color:#ff8181; font-family:cursive; text-align: center;"><span style="color:red;">****************</span><br>
				<span style="color:red;">*</span>!Fill in all fields<span style="color:red;">*</span><br>
				<span style="color:red;">****************</span></div>';
			}
			else if($_GET["error"] == "invaliduid"){
				echo '<div style="color:white; font-family:cursive; text-align: center;"><span style="color:red;">**************************</span><br>
				<span style="color:red;">*</span>!choose a proper username<span style="color:red;">*</span><br>
				<span style="color:red;">**************************</span></div>';
			}
			else if($_GET["error"] == "invalidemail"){
				echo '<div style="color:white; font-family:cursive; text-align: center;"><span style="color:red;">***********************</span><br>
				<span style="color:red;">*</span>!choose a proper email<span style="color:red;">*</span><br>
				<span style="color:red;">***********************</span></div>';
			}
			else if($_GET["error"] == "passwordsdontmatch"){
				echo '<div style="color:white; font-family:cursive; text-align: center;"><span style="color:red;">**************************</span><br>
				<span style="color:red;">*</span>!Passwords doesn`t match<span style="color:red;">*</span><br>
				<span style="color:red;">**************************</span></div>';
			}
			else if($_GET["error"] == "stmtfailed"){
				echo '<div style="color:white; font-family:cursive; text-align: center;"><span style="color:red;">********************************</span><br>
				<span style="color:red;">*</span>!Something went wrong, try again<span style="color:red;">*</span><br>
				<span style="color:red;">********************************</span></div>';
			}
			else if($_GET["error"] == "usernametaken"){
				echo '<div style="color:white; font-family:cursive; text-align: center;"><span style="color:red;">*************************</span><br>
				<span style="color:red;">*</span>!Username already taken<span style="color:red;">*</span><br>
				<span style="color:red;">*************************</span></div>';
			}
			else if($_GET["error"] == "none"){
				echo '<div style="color:white; font-family:cursive; text-align: center;"><span style="color:#00ff00;">*********************</span><br>
				<span style="color:#00ff00;">*</span>!<span style="color:#00ff00;">R</span>egistration Success<span style="color:#00ff00;">*</span><br>
				<span style="color:#00ff00;">*********************</span></div>';
			}
		}
		?>
		<div class="button_place_home">
			<a class="button_home" href="index.php">עמוד הראשי</a>
		</div>
</body>
</html>