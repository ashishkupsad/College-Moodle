<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    $course_code = $_SESSION['course_code'];

    $sql="SELECT course_name FROM courses WHERE course_code = '$course_code'";
    include('connection.php');
        $res=mysqli_query($dbc,$sql);
        while($row1 = mysqli_fetch_array($res)){
            $course_name = $row1["course_name"];
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
                        echo '<th><a href="eval.php?user_id='.$user_id.'&course_code='.$course_code.'&id='.$row['id'].'">evaluate</a></th>';
                    echo "</tr>";
                }  
                mysqli_free_result($result); 
            }
        }
    echo "</table>";

?>