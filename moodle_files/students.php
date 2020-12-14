<html>
<head>
    <meta charset=UTF-8>
    <title>
	    Student page
    </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

?>

</head>
<body>

<nav>
  <ul>
    <li><a href="students.php?id=<?php echo $id;?>">Home</a></li>
    <li><a href="complaints1.php?id=<?php echo $id;?>">Complaints</a></li>
	<li><a href="clogin.php?id=<?php echo $id;?>">Message</a></li>
  </ul>
</nav>


<?php

require("connection.php");

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
	die("There was an error connecting to the database");
}

//require("login1.php");

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

$query="SELECT * FROM auth WHERE uname='$id' AND position='student'";
$result=$conn->query($query);

if($conn->query($query)==TRUE)
{
	while($row=$result->fetch_assoc())
	{
		echo "<h2>Welcome ".$row["fname"]."</h2>";
	}
	
	echo 
	"<div class='row'>
		<div class='column' style='background-color:#aaa;'>
			<h2 style='color:#000000;'>COURSES:</h2>
			<a href='student_view.php?id=$id'><h3>LIST OF COURSES</h3></a>
			<a href='quiz3.php?id=$id'><h3>EXAM</h3></a>
		</div>
	</div>";
}
else
{
	echo "Error: ".$query. "<br>" . $conn->error;
}

?>