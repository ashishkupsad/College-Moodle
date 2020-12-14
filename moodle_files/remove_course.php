<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $course_code=$_POST['course_code'];

    if(!empty($course_code))
    {
        include('connection.php');
        $sql1="DROP TABLE $course_code";
        $sql3="SELECT course_name FROM courses WHERE course_code='$course_code'";
        $sql2="DELETE FROM `courses` WHERE `course_code` = '$course_code'";
        if(mysqli_query($dbc,$sql1) && mysqli_query($dbc,$sql3) && mysqli_query($dbc,$sql2)){
            

        #if (file_exists("G:\Remote_server\htdocs\SSL_1810\courses/$course_code")) {
        #    if((count(glob("../courses/$course_code")) != 0)){    
        #        rmdir("../courses/$course_code");
        #    }    
        #}

        function emptyDir($dir) {
            if (is_dir($dir)) {
                $scn = scandir($dir);
                foreach ($scn as $files) {
                    if ($files !== '.') {
                        if ($files !== '..') {
                            if (!is_dir($dir . '/' . $files)) {
                                unlink($dir . '/' . $files);
                            } else {
                                emptyDir($dir . '/' . $files);
                                rmdir($dir . '/' . $files);
                            }
                        }
                    }
                }
            }
        }
        
        $dir = '../courses/'.$course_code;
        emptyDir($dir);
        rmdir($dir);


        $cs = $course_code.'submissions';
        $sql4 = "DROP TABLE $cs";
        if(mysqli_query($dbc,$sql4)){
            echo $course_code.' is removed successfully';
        
        }
    }    
    }    
    else{
        echo 'No course was selected. <a href="remove_course_form.php">Return</a> to try again.</br>';
        echo '<a href="view/admin_page.php">Go to home</a>';
    }

}
?>