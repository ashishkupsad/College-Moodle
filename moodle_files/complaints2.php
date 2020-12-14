<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

?>

<?php

$chat=$_POST['chat'];

require("connection.php");

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
	die("There was an error connecting to the database");
}
	
//echo "$position";

//$query="INSERT INTO complaints VALUES('$id','$chat');"


if(!empty($chat))
{
	    $query="INSERT INTO complaints VALUES('$id','$chat')";
		
		if($conn->query($query)==TRUE)
		{
			//while($row=$result->fetch_assoc())
			//{
				
			//}
			echo "<div style='background-color:#bbb;'><h1>Sent Succesfully.</h1></div>";
		}
		else
		{
			echo "Error: ".$query. "<br>" . $conn->error;
		}
		
}
else
{
	echo "Fill all fields";	
}