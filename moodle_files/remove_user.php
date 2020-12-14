<?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $user_id=$_POST['user_id'];

        include('connection.php');
        $sql = "DELETE FROM auth WHERE `uname`='$user_id'";
        if(mysqli_query($dbc,$sql)){
            $sql1 = "DELETE FROM students WHERE `user_id`='$user_id'";
            if(mysqli_query($dbc,$sql1)){    
                echo "Removed user successfully</br>";
                echo '<a href="admin_page.php">';
            }
        }
        else{
            echo 'Enter valid User ID</br>';
            echo '<a href="remove_ins_form.php">Try again</a></br>';
            echo '<a href="admin_page.php">';
        }
?>