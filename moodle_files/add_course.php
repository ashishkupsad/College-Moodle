<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
    $course_name=$_POST['course_name'];
    $course_code=$_POST['course_code'];
    $course_code= strtoupper($course_code);
    if(!empty($course_name) && !empty($course_code)){
        
        include('connection.php');
        
        $sql = "CREATE TABLE $course_code( id INT(10) NOT NULL AUTO_INCREMENT ,PRIMARY KEY (id) , title VARCHAR(50) NOT NULL , date DATE NOT NULL , description VARCHAR(200) NOT NULL , file_uploads VARCHAR(50), dead_line DATE NOT NULL)";
        $add_course = "INSERT INTO courses VALUES('$course_code','$course_name')";
        if(mysqli_query($dbc,$sql) && mysqli_query($dbc,$add_course)){
            #$created = mysqli_affected_rows();
           

            if (!file_exists("../courses/$course_code")) {
                mkdir("../courses/$course_code/resources", 0777, true);
                mkdir("../courses/$course_code/assignments", 0777, true);
                mkdir("../courses/$course_code/tests", 0777, true);
                mkdir("../courses/$course_code/submissions", 0777, true);
            }
            $cs = $course_code.'submissions';
            $sql2 = "CREATE TABLE $cs ( `id` INT(10) NOT NULL , `user_id` VARCHAR(20) NOT NULL , `file_path` VARCHAR(50) NOT NULL , `comments` VARCHAR(200) NOT NULL , `score*(9/10)` INT(10) NOT NULL , `remarks` VARCHAR(200) NOT NULL )";
            if(mysqli_query($dbc,$sql2)){
                echo $course_name.' added to courses';
                echo '<a href="admin.php?id=admin">Return to admin homepage</a>';
            }
            else{
                echo "failed";
            }
            //echo $created."rows is affected, everything is fine";
        }
        else{
            echo "ERROR: could not execute";
        }

    }
    else{
        echo "Fill all fields";
    }        


#else{
#    echo "Login denied";
}



?>