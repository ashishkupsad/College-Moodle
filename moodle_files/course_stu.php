<?php
    if(isset($_GET['user_id'])){
        $user_id=$_GET['user_id'];
        $course_code=$_GET['course_code'];
        $course_code=strtoupper($course_code);
    }
?>  <!--  
    if(!empty($course_code)){
    $temp1 = $user_id;
    $temp2 = $course_code;
    }
    
    session_start();
    $user_id=$_SESSION['user_id'];
    $course_code=$_SESSION['course_code'];

    if(empty($course_code)){
        $course_code=$temp2;
        $user_id=$temp1;
    }
    $_SESSION['user_id'] = $user_id;
    $_SESSION['course_code'] = $course_code;-->
<?php
    #echo $user_id.' '.$course_code;
    $sql="SELECT course_name FROM courses where course_code = '$course_code'";
    include('connection.php');
        $res=mysqli_query($dbc,$sql);
        while($row = mysqli_fetch_array($res)){
            $course_name = $row["course_name"];
            echo '<h2>'.$course_name.'('.$course_code.')</h2>';
        }

    echo "<table>";
        echo "<tr>";
            echo "<th>Title</th>";
            echo "<th>Date</th>";
            echo "<th>Description</th>";
            echo "<th>Files</th>";
            echo "<th>Dead Line</th>";
        echo "</tr>";

        $sql2="SELECT * FROM $course_code";
        if($result = mysqli_query($dbc, $sql2)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    //echo '<a href="courses_ins/'.$row["course_code"].'.html">'.$row["course_name"].' ('.$row["course_code"].')</br>';

                    echo "<tr>";
                        echo '<th>'.$row['title'].'</th>';
                        echo '<th>'.$row['date'].'</th>';
                        echo '<th>'.$row['description'].'</th>';
                        if(!empty($row['file_uploads'])){
                        echo '<th><a href="'.$row['file_uploads'].'" download>download</a></th>';
                        }
                        else{echo '<th>---</th>';}
                        echo '<th>'.$row['dead_line'].'</th>';
                        echo '<th><a href="assignment_submission_form.php?user_id='.$user_id.'&course_code='.$course_code.'&id='.$row['id'].'">Submit</a></th>';
                    echo "</tr>";
                }  
                mysqli_free_result($result); 
            }
        }
    echo "</table>";
    

    
    
    

?>