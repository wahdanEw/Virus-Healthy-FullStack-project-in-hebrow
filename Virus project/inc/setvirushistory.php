<?php

if(isset($username)){
        $date = date("Y-m-d H:i:s");
        $option = $_GET['Virus2'];

        $sql = "INSERT INTO HistoryVirus (username, date, value_search) VALUES ('$username', '$date', '$option')";
        $result = $conn->query($sql);
}
