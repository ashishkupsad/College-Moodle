<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

?>

<?php


require("connection.php");

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
	die("There was an error connecting to the database");
}
	
//echo "$position";

$query="SELECT * FROM complaints";
$result=$conn->query($query);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo $row["name"]." : ".$row["msg"];
		echo "<br>";
	}
}

if($conn->query($query)==TRUE)
{
	//echo "<div style='background-color:#bbb;'><h1>Created Succesfully.</h1></div>";
}
else
{
	echo "Error: ".$query. "<br>" . $conn->error;
}
?>