<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_id=$_POST['user_id'];
    $course_1=$_POST['course_1'];
    $course_2=$_POST['course_2'];
    $course_3=$_POST['course_3'];

    if(!empty($user_id) ){
        include('connection.php');
        if(!empty($course_1) OR !empty($course_2) OR !empty($course_3)){

            $sql = "INSERT INTO `instructors` VALUES('$user_id', '$course_1', '$course_2', '$course_3')";
            if(mysqli_query($dbc,$sql)){
                echo "Instructor is linked with course(s) successfully</br>";
                echo '<a href ="admin.php?id=admin">Return to home</a>';

            }
        }
        else{
            echo "Select atleast one course";
            echo '<a href ="add_ins_form.php">Try again</a>';
        }
    }
    else{
        echo "User ID field cannot be left blank";
        echo '<a href ="add_ins_form.php">Try again</a>';
    }
}
?>