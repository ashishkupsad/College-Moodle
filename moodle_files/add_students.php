<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_id=$_POST['user_id'];
    $course_1=$_POST['course_1'];
    $course_2=$_POST['course_2'];
    $course_3=$_POST['course_3'];
    $course_4=$_POST['course_4'];
    $course_5=$_POST['course_5'];
    $course_6=$_POST['course_6'];
    $course_7=$_POST['course_7'];
    $course_8=$_POST['course_8'];
    $course_9=$_POST['course_9'];
    $course_10=$_POST['course_10'];

    if(!empty($user_id) ){
        include('connection.php');

        $sql = "INSERT INTO `students`(`user_id`, `course_1`, `course_2`, `course_3`, `course_4`, `course_5`, `course_6`, `course_7`, `course_8`, `course_9`, `course_10`) VALUES ('$user_id','$course_1','$course_2','$course_3','$course_4','$course_5','$course_6','$course_7','$course_8','$course_9','$course_10')";
        if(mysqli_query($dbc,$sql)){
            //$created = mysqli_affected_rows();
            echo "Your courses are updated";
        }
    }
}





?>