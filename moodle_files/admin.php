
<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

?>

<html>
<head>
    <meta charset=UTF-8>
    <title>
	    Admin page
    </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<nav>
  <ul>
    <li><a href="admin.php?id=<?php echo $id;?>">Home</a></li>
   <!--<li><a href="#">Notifications</a></li>-->
    <li><a href="see.php">Complaints</a></li>
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


$query="SELECT * FROM auth WHERE uname='$id' AND position='admin'";
$result=$conn->query($query);

if($conn->query($query)==TRUE)
{
	while($row=$result->fetch_assoc())
	{
		echo "<h1>Hello ".$row["fname"]."</h1>";
	}
	echo 
	"<div class='row'>
		<div class='column' style='background-color:#aaa;'>
			<h2 style='color:#000000;'>COURSES:</h2>
			<a href='listofcourses.php'><h3>LIST OF COURSES</h3></a>
			<hr style='width:100%;height: 1px;border: 0;border-top: 1px solid #ccc;margin: 1em 0;background-color:	#ADFF2F;'>
			<a href='add_course_form.html'><h3>ADD COURSES</h3></a>
			<hr style='width:100%;height: 1px;border: 0;border-top: 1px solid #ccc;margin: 1em 0;background-color:	#ADFF2F;'>
			<a href='remove_course_form.php'><h3>DELETE COURSES</h3></a>
			<hr style='width:100%;height: 1px;border: 0;border-top: 1px solid #ccc;margin: 1em 0;background-color:	#ADFF2F;'>
			<a href='add_students_form.php'><h3>ADD STUDENTS TO COURSES</h3></a>
		</div>
		<div class='column' style='background-color:#bbb;'>
			<h2 style='color:#000000;'>INSTRUCTORS:</h2>
			<a href='listofinstructors.php'><h3>LIST OF INSTRUCTORS</h3></a>
			<hr style='width:100%;height: 1px;border: 0;border-top: 1px solid #ccc;margin: 1em 0;background-color:	#ADFF2F;'>
			<a href='add_ins_form.php'><h3>ADD INSTRUCTORS</h3></a>
			<hr style='width:100%;height: 1px;border: 0;border-top: 1px solid #ccc;margin: 1em 0;background-color:	#ADFF2F;'>
			<a href='remove_ins_form.php'><h3>DELETE INSTRUCTORS</h3></a>
		</div>
	</div>";
}
else
{
	echo "Error: ".$query. "<br>" . $conn->error;
}

?>

</div>
</body>
</html>