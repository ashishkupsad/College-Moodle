<?php

$coursename=$_POST['coursename'];
$coursecode=$_POST['coursecode'];

function val($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

require("connection.php");

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
	die("There was an error connecting to the database");
}
	
//echo "$position";
	
if(!empty($coursename) && !empty($coursecode))
{
	    $query="INSERT INTO courses
			    VALUES('$coursename','$coursecode')";
		$query2="CREATE TABLE $coursecode
				(
					course_code varchar(50),
					instructor_name varchar(50),
					PRIMARY KEY (course_code)
				)";
		if(($conn->query($query)==TRUE) && ($conn->query($query2)==TRUE))
		{
			echo "<div style='background-color:#bbb;'><h1>Created Succesfully.</h1></div>";
		}
		else
		{
			echo "Error: ".$query. "<br>" . $conn->error;
			echo "Error: ".$query2. "<br>" . $conn->error;
		}
		
}
else
{
	echo "Fill all fields";	
}

?>