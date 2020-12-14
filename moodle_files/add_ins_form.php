<html>
<head>
<meta charset=UTF-8>
<title>
    Link instructors
</title>

<script>
    function required()
    {
        var empt = document.add_instructors.user_id.value;
        if (empt === "")
        {
            alert("User ID field cannot be empty");
            setTimeout(function(){
            window.location.href = "add_ins_form.php";
            },2000);    
        
        }
        else 
        {
        //alert('Code has accepted : you can try another');
        return true; 
        }
    }
</script>
</head>

<body>
    <h2>Permission for instructor to access the following courses </h2>

    

    <!--onsubmit="required()"-->
    <div id="container">
        <form id="add_instructors" name="add_instructors" action="add_ins.php"  method="post" enctype="multipart/form-data"  >
            Registered user ID
                <input type="text" name="user_id"/></br>
                Course 1
                    <select name="course_1" form="add_instructors">
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

                    <select name="course_2" form="add_instructors">
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
                            <select name="course_3" form="add_instructors">
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