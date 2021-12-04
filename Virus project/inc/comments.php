<?php

function setComments($conn){
    if(isset($_POST['commentSubmit'])){
        $username = $_POST['username'];
        $date = $_POST['date'];
        $message =  strip_tags(trim($_POST['message']));

        $sql = "INSERT INTO comments (username, date, message) VALUES ('$username', '$date', '$message')";
        $result = $conn->query($sql);     
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        $id = $row['username'];
        $sql2 = "SELECT * FROM users WHERE username = '$id'";
        $result2 = $conn->query($sql2);
        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box'><p>";
            echo "<div class='user-textarea-style'>".$row2['username']."</div>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p>";
        if(isset($_SESSION['username'])){
            $uname = $_SESSION['username'];
            if( $uname ==  'admin'){
                echo "<form class='delete-form' method='POST' action=''>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <button type='submit' name='commentDelete'>מחק</button>
                    </form>
                    <form class='edit-form' method='POST' action='editcomment.php'>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <input class='username-textarea-style' type='hidden' name='username' value='".$row['username']."'>
                        <input type='hidden' name='date' value='".$row['date']."'>
                        <input type='hidden' name='message' value='".$row['message']."'>
                        <button>ערוך</button>
                    </form>";
            }
            else if($uname != 'admin'){
                if(isset($_SESSION['id'])){
                    if($_SESSION['id'] == $row2['id']){
                        echo "<form class='delete-form' method='POST' action=''>
                                    <input type='hidden' name='id' value='".$row['id']."'>
                                    <button type='submit' name='commentDelete'>מחק</button>
                                </form>
                                <form class='edit-form' method='POST' action='editcomment.php'>
                                    <input type='hidden' name='id' value='".$row['id']."'>
                                    <input class='username-textarea-style' type='hidden' name='username' value='".$row['username']."'>
                                    <input type='hidden' name='date' value='".$row['date']."'>
                                    <input type='hidden' name='message' value='".$row['message']."'>
                                    <button>ערוך</button>
                                </form>";
                            }
                        }

                    }
                }
            }
        echo "</div>";
    }
}

function editComments($conn){
    if(isset($_POST['commentSubmit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $date = $_POST['date'];
        $message =  strip_tags(trim($_POST['message']));
        
        $sql = "UPDATE comments SET message='$message' WHERE id='$id'";
        $result = $conn->query($sql);
        header("Location: index.php");     
    }
}
