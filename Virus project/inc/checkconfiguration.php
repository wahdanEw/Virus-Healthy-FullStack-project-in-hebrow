<?php

session_start();
// if(isset($_POST['font-size'])){
//     $select1 = $_POST['font-size'];
//     switch ($select1) {
//         case '1':
//             $href  = './css/css1.css';
//             return $href;
//             break;
//         case '2':
//             $href  = './css/css2.css';
//             return $href;
//             break;
//         case '3':
//             $href  = './css/css3.css';
//             return $href;
//             break;
//         default:
//             # code...
//             break;
//     }
// }

if(isset($_POST['number'])){
    $_SESSION['number'] = $_POST['number'];
    header("location: ../index.php");
}
