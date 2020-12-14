<html>
<head>
<meta charset=UTF-8>
<title>
    Enroll to courses
</title>
</head>

<body>
    <h2>Enroll to courses</h2>

    

    
    <div id="container">
        <form id="add_students" action="add_students.php"  method="post" enctype="multipart/form-data">
            User id
                <input type="text" name="user_id"/></br>
            Course 1
                <select name="course_1" form="add_students">
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

                </br>
            Course 2

                <select name="course_2" form="add_students">
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
                </br>
            Course 3
                <select name="course_3" form="add_students">
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
                </br>
            Course 4
                <select name="course_4" form="add_students">
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
                </br>
            Course 5
                <select name="course_5" form="add_students">
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
                </br>
            Course 6
                <select name="course_6" form="add_students">
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
                </br>
            Course 7
                <select name="course_7" form="add_students">
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
                </br>
            Course 8
                <select name="course_8" form="add_students">
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
                </br>
            Course 9
                <select name="course_9" form="add_students">
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
                </br>
            Course 10
                <select name="course_10" form="add_students">
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

<!--<select name="dept" form="regform">
					<option value="CS">CSE</option>
					<option value="EE">EE</option>
					<option value="ME">ME</option>
				</select> -->