<?php
session_start(); 
$user_id=$_SESSION['user_id'];
$course_code=$_SESSION['course_code'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $desc = $_POST['desc'];
    //$ufile = $_POST['ufile'];
    $dead_line = $_POST['dead_line'];

    //$target_dir = "..\courses\AR101\assignments\temp/";
    //$target_file = $target_dir . basename($_FILES["ufile"]["name"]);

    
    $target_file="";
    if(!empty($title) && !empty($date) && !empty($desc)){
        include('connection.php');
        $sql = "INSERT INTO $course_code (`title`, `date`, `description`, `file_uploads`, `dead_line`) VALUES ('$title','$date','$desc','$target_file','$dead_line')";
        if(mysqli_query($dbc,$sql)){
            //echo "success";
        
        

        $sql2 = "SELECT id FROM $course_code WHERE title='$title' AND description='$desc'";
        $res = mysqli_query($dbc,$sql2);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
        }

        if (!file_exists("..courses/$course_code/assignments/$id")) {
            mkdir("../courses/$course_code/assignments/$id", 0777, true);
        }
        if(move_uploaded_file($_FILES["ufile"]["tmp_name"],"../courses/".$course_code."/assignments/".$id."/".$_FILES["ufile"]["name"])){
            $target_file="../courses/".$course_code."/assignments/".$id."/".$_FILES['ufile']['name'];
            //echo $target_file;
            $sql3 =  "UPDATE $course_code SET file_uploads = '$target_file' WHERE id = '$id'";
                if(mysqli_query($dbc,$sql3)){
                    //echo 'Assignment added successfully';
                    
                    //header("Location: ../view/course.php?user_id=$user_id&course_code=$course_code");
                    //echo '<a href="course.php?user_id='.$uname.'&course_code='.$course_1.'">'.$row["course_1"].'</a> </br>';
                   
                }
        }  
        //$_SESSION['user_id'] = $user_id;
        //$_SESSION['course_code'] = $course_code;   
        //echo '<a href="../view/course.php">Return</a>';
        header("Location: course.php?user_id=$user_id&course_code=$course_code");
        }
        else{
            echo "Failed";
        }    
    }


}
?>