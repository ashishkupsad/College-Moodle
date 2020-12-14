<?php
require("connection.php");

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
	die("There was an error connecting to the database");
}
	
//echo "$position";

$query="SELECT * FROM instructors";
$result=$conn->query($query);
$i=1;

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo $i;
		echo ")";
		echo $row['user_id'];
		echo "<br>";
		$i++;
	}
}
		
if($conn->query($query)==TRUE)
{
	echo "<div style='background-color:#bbb;'><h1>List of instructors.</h1></div>";
}
else
{
	echo "Error: ".$query. "<br>" . $conn->error;
}
?>