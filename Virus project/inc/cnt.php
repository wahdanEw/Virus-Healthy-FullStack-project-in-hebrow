<?php

if(isset($username)){
		if(empty($_SESSION['counter'])){
			$_SESSION['counter'] = 1;
		}else{
			$_SESSION['counter']++;
		}  
	
		$times = $_SESSION['counter'];
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO CntVists (username, pagename, total_times, date) VALUES ( '$username', '$title', '$times', '$date')";
		$result = $conn->query($sql);
}
