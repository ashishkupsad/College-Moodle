<?php

$remail1=$_POST['remail1'];
$pass1=$_POST['pass1'];


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

$query="SELECT * FROM auth WHERE uname='$remail1' AND position='admin'";
$result=$conn->query($query);

$x=0;
$id="";

if($result->num_rows>0)
{
	//echo "hii";
	while($row=$result->fetch_assoc())
	{
		if(strcmp($row["pass"],$pass1)==0)
		{
			$id=$row["uname"];
			$x++;
		}
	}
}
if($x==0)
{
	echo "incorrect password";
	header("Location: login3.html");
}

if($conn->query($query)==TRUE)
{
	//echo "$id";
	//echo "<a href='user.php?id=".$id."'"</a>;
	header("Location: admin.php?id=$id");
}
else
{
	echo "Error: ".$query. "<br>" . $conn->error;
}

?>