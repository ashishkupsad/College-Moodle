<?php
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    $course_code=$_GET['course_code'];
    $course_code=strtolower($course_code);
    $id=$_GET['id'];
    $uname=$_GET['uname'];
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $score=$_POST['score'];

    include('connection.php');
    $cs = strtolower($course_code.'submissions');

    $sql = "UPDATE `$cs` SET `score*(9/10)`='$score' WHERE `id`='$id' AND `user_id`='$user_id'";
    if(mysqli_query($dbc,$sql)){
        header("Location: eval.php?user_id=$uname&course_code=$course_code&id=$id");
    }
}
?>