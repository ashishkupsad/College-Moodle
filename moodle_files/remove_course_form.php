<html>
<head>
<meta charset=UTF-8>
<title>
	Remove course
</title>
</head>

<body>
    <h2>Remove course</h2>

    <h4>Select course to remove</h4>
    <div id="container">
        <form id="remove_course" action="remove_course.php"  method="post" enctype="multipart/form-data">
            Course Name
                <select name="course_code">
                    <option value="">---</option>
                    <?php
                    include('connection.php');
                    $sql = "SELECT * FROM courses";
                    if($result = mysqli_query($dbc, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                echo '<option value="'.$row["course_code"].'">'.$row["course_name"].'('.$row["course_code"].' )</option>';
                            }  
                        mysqli_free_result($result); 
                        }
                        else{
                            echo "No records matching your query were found.";
                        }
                    }
                    ?>    
                </select>

            <input type="submit">
        </form>    
    </div>
</body>
</html>