<?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $user_id=$_POST['user_id'];

        include('connection.php');
        $sql = "DELETE FROM instructors WHERE `user_id`='$user_id'";
        if(mysqli_query($dbc,$sql)){
            echo "Removed instructor successfully</br>";
            echo '<a href="../view/admin_page.php">';
        }
        else{
            echo 'Enter valid User ID</br>';
            echo '<a href="remove_ins_form.php">Try again</a></br>';
            echo '<a href="../view/admin_page.php">';
        }
    }    

?>