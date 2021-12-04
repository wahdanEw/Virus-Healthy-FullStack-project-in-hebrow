<?php

if(isset($_POST['commentDelete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM Comments WHERE id='$id'";
    $sql2 = "SET @num := 0";
    $sql3 = "UPDATE Comments SET id = @num :=(@num+1)";
    $sql4 = "DELETE TABLE Comments AUTO_INCREMENT = 1";

    $result = $conn->query($sql);
    $result22 = $conn->query($sql2);
    $result23 = $conn->query($sql3);
    $result24 = $conn->query($sql4);
}
