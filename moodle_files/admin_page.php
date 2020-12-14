<html>
<head>
    <meta charset=UTF-8>
    <title>
	    Admin page
    </title>
    <link rel="stylesheet" type="text/css" href="admin_page.css"/>
</head>
<body>

    <div class="sidenav">
        <a href="">Quick links</a>
        <hr>
        <hr>
        <a href="../add/add_course_form.html">Add course</a>
        <hr>
        <a href="../add/remove_course_form.php">Remove course</a>
        <hr>
        <a href="../add/add_ins_form.php">Add instructor</a>
        <hr>
        <a href="../add/remove_ins_form.php">Remove instructor</a>
        <hr>
        <a href="../add/remove_users.php">Delete users</a>
    </div>

    <div class="container">
        <h2>Admin page</h2>
        <b>Courses</b></br>

    <?php
        include('connection.php');
        $sql = "SELECT * FROM courses";
        if($result = mysqli_query($dbc, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo '<a href="courses_ins/'.$row["course_code"].'.html">'.$row["course_name"].' ('.$row["course_code"].')</br>';
                }  
                mysqli_free_result($result); 
            }
            else{
                echo "No records matching your query were found.";
            }
        }
    ?>
   

    </div>
</body>
</html>
       

        

