<?php 
    session_start();
	date_default_timezone_set('Asia/Jerusalem');
	include './inc/db.php';
	include './inc/comments.php';
    $href = $_SESSION['number'];
?>

<!DOCTYPE html>
<html lang="IL" dir="rtl">
<head>
    <meta charset="UTF-8">
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
    <title>ערוך תגובות</title>
</head>
<body>
    <section>
		<?php
            $id = $_POST['id'];
            $username = $_POST['username'];
            $date = $_POST['date'];
            $message = $_POST['message'];
            
			echo '<form action="'.editComments($conn).'" method="POST">
                    <label class="label_txt_area" for="message">ערוך חוות דעת:</label>
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="username" value="'.$username.'">
                    <input type="hidden" name="date" value="'.$date.'">
                    <div class="edit-textarea"><textarea class="txt_area_placholder" name="message" placeholder="דרג במילים">'.$message.'</textarea></div><br>
                    <div class="submit_edit_txtarea_parent">
                        <button type="submit" name="commentSubmit" class="submit_edit_txtarea_son">Edit</button>
                    </div>
			    </form>';
		?>
	</section>
	<div class="button_place_home">
		<a class="button_home" href="index.php">עמוד הראשי</a>
	</div>
</body>
</html>