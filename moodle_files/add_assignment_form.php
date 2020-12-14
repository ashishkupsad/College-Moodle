<?php
    session_start(); 
    $user = $_SESSION['user_id'];
    $code = $_SESSION['course_code'];
    
    
    $_SESSION['user_id']=$user;
    $_SESSION['course_code']=$code;
   
    ?>
<html>
<head>
<meta charset=UTF-8>
<title>
	Assignment
</title>
</head>

<body>
    <h2>New assignment</h2>
    
   
    <div id="container">
        <form id="add_assignment" action="add_assignment.php"  method="post" enctype="multipart/form-data">
            Title</br>
                <input type="text" name="title"/></br>
            Date</br>
                <input type="date" name="date"/></br>
            Description</br>
                <!--<input class="desc" type="text" name="desc"/></br>-->
                <textarea name="desc" form="add_assignment">description...</textarea></br>    
            File </br>
                <input type="file" name="ufile" id="ufile"/></br>
            Dead line</br>
                <input type="date" name="dead_line"/></br></br>

            <input type="submit">
        </form>    
    </div>
</body>
</html>
