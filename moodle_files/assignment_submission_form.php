<?php
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    $course_code=$_GET['course_code'];
    $course_code=strtoupper($course_code);
    $id=$_GET['id'];
}
session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['course_code'] = $course_code;
$_SESSION['id'] = $id;
?>
<html>
<head>
<meta charset=UTF-8>
<title>
	Submission
</title>
</head>

<body>
    <h2>Submission</h2>
    
   
    <div id="container">
        <form id="assignment_submission" action="assignment_submission.php"  method="post" enctype="multipart/form-data">
            Title
                <?php
                    $sql = "SELECT title FROM $course_code WHERE id = '$id'";
                    include('connection.php');
                    $res = mysqli_query($dbc,$sql);
    
                    if(mysqli_num_rows($res) > 0){
                        while($row = mysqli_fetch_array($res)){  
                            echo ': '.$row["title"];
                        }
                        mysqli_free_result($res);
                    }    
                ?>
                </br>
            File </br>
                <input type="file" name="ufile" id="ufile"/></br>
            Comments</br>
                <textarea name="comment" form="assignment_submission">text here...</textarea></br>

            <input type="submit">
        </form>    
    </div>
</body>
</html>