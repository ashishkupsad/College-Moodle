<?php
    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        $course_code = $_GET['course_code'];
        $course_code = strtoupper($course_code);
        $id = $_GET['id'];


        $sql="SELECT course_name FROM courses where course_code = '$course_code'";
        include('connection.php');
        $res=mysqli_query($dbc,$sql);
        while($row = mysqli_fetch_array($res)){
            $course_name = $row["course_name"];
            echo '<h2>'.$course_name.'('.$course_code.')</h2>';
        }
        mysqli_free_result($res);


        echo "<table>";
        echo "<tr>";
            echo "<th>User ID</th>";
            #echo "<th>Name</th>";
            echo "<th>File</th>";
            echo "<th>Comment</th>";
            echo "<th>Marks</th>";
        echo "</tr>";

        $cs = strtolower($course_code.'submissions');
        $sql2 = "SELECT * FROM $cs WHERE id ='$id'";
        if($result = mysqli_query($dbc,$sql2)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<th>".$row['user_id']."</th>";
                        
                        $a = $row['user_id'];
                        $sql3 = "SELECT fname, lname FROM auth WHERE uname='$a'";
                        #if($result1 = mysqli_query($dbc, $sql2)){
                        #   if(mysqli_num_rows($result1) > 0){
                        #        while($row = mysqli_fetch_array($result1)){
                        #        echo "<th>".$row['fname']." ".$row['lname']."</th>";
                        #        }
                        #        mysqli_free_result($result1); 
                        #    }
                        #}
                        
                        echo '<th><a href="'.$row['file_path'].'" download>download</a></th>';
                        
                        echo "<th>".$row['comments']."</th>";
                        
                        if(!empty($row['score*(9/10)']))
                        {
                            echo '<th>'.$row['score*(9/10)'].'</th>';
                        }
                        else{
                        echo '
                            <th>  
                                <form id="score" action="print_score.php?uname='.$user_id.'&user_id='.$row['user_id'].'&course_code='.$course_code.'&id='.$id.'" method="post">
                                    <input type="text" name="score"/>
                                    <input type="submit" value="save">
                                </form>
                            </th>';
                        }            

                    echo"</tr>";

                    
                }
                mysqli_free_result($result); 
            }
        }
        echo "</table>";

    }
?>