<?php
session_start();
$user_id = $_SESSION['user_id'];
$course_code = $_SESSION['course_code'] ;
$id = $_SESSION['id'] ;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $comment = $_POST['comment'];

    if (!file_exists("../courses/$course_code/submissions/$id/$user_id")) {
        mkdir("../courses/$course_code/submissions/$id/$user_id", 0777, true);
    }
    if(move_uploaded_file($_FILES["ufile"]["tmp_name"],"../courses/".$course_code."/submissions/".$id."/".$user_id."/".$_FILES["ufile"]["name"])){
        $target_file = '../courses/'.$course_code.'/submissions/'.$id.'/'.$user_id.'/'.$_FILES['ufile']['name'];
        $cs = strtolower($course_code.'submissions');
        echo $cs;
        include('connection.php');
        $a = "";
        $b = "";
        $sql1 = "INSERT INTO $cs (`id`, `user_id`, `file_path`, `comments`,`score*(9/10)`, `remarks`) VALUES ('$id','$user_id','$target_file','$comment', '$a', '$b')";
        if(mysqli_query($dbc,$sql1)){
            header("Location: course_stu.php?user_id=$user_id&course_code=$course_code");
        }
        else{
            echo "failed";
        }
    }
}
        
?>