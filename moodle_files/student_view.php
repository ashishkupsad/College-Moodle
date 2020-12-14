<?php

if(isset($_GET['id']))
{
	$uname=$_GET['id'];
}

?>

<?php

if(!empty($uname)){
    #echo $uname;
    include('connection.php');

    $sql1="SELECT fname,lname FROM auth WHERE uname = '$uname'";
    $res1 = mysqli_query($dbc,$sql1);

    if(mysqli_num_rows($res1) > 0){
        while($row1 = mysqli_fetch_array($res1)){
            echo '<h2>Welcome '.$row1["fname"].' '.$row1["lname"].'</h2>';
        }  
        mysqli_free_result($res1); 
    

    $sql = "SELECT * FROM students WHERE user_id = '$uname'";
    
    $res = mysqli_query($dbc,$sql);
    
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_array($res)){
                $course_1=$row["course_1"];
                $course_2=$row["course_2"];
                $course_3=$row["course_3"];
                $course_4=$row["course_4"];
                $course_5=$row["course_5"];
                $course_6=$row["course_6"];
                $course_7=$row["course_7"];
                $course_8=$row["course_8"];
                $course_9=$row["course_9"];
                $course_10=$row["course_10"];
                

            
                //echo $row["course_1"].'</br>'.$row["course_2"].'</br>'.$row["course_3"];
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_1.'">'.$row["course_1"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_2.'">'.$row["course_2"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_3.'">'.$row["course_3"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_4.'">'.$row["course_4"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_5.'">'.$row["course_5"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_6.'">'.$row["course_6"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_7.'">'.$row["course_7"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_8.'">'.$row["course_8"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_9.'">'.$row["course_9"].'</a> </br>';
                echo '<a href="course_stu.php?user_id='.$uname.'&course_code='.$course_10.'">'.$row["course_10"].'</a> </br>';

            }  
            mysqli_free_result($res); 

        }
        else{
            echo "No works yet.";
        }

    }
    else{
        echo "Invalid user ID or password.</br>";
        echo '<a href="../id_form.html">Return to login page</a>';
    }
  
    # echo $row["course_1"].' '.$row["course_2"].' '.$row["course_3"];

    /*if($result = mysqli_query($dbc, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo '<a href="courses_ins/'.$row["course_code"].'.html">'.$row["course_name"].' ('.$row["course_code"].')</br>';
            }  
            mysqli_free_result($result); 
        }
        
        else{
            echo "No records matching your query were found.";
        }
    }*/

   # echo "course_1"; 
}

?>