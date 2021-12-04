<?php
    session_start();
    $href = $_SESSION['number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>שכחתי סיסמה</title>
</head>
<body>
    <section>
        <div class="forgot_page_place">
            <label class="fgp_Label" for="email">מייל:</label>
            <form action="" method="POST" >
                <div class="input_email_place">
                    <input class="fgp_email_input" type="email" name="email" id="" placeholder="הזן מייל">
                </div>
                <button type="submit" name="reset-request-submit" class="send_submit">קבל סיסמא חדשה בדואר</button>
            </form>
        </div>
    </section>
    <div class="button_place_home">
		<a class="button_home" href="index.php">עמוד הראשי</a>
	</div>
</body>
</html>