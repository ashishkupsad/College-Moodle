
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
	    Staff page
    </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>


</head>
<body>

<nav>
  <ul>
    <li><a href="staff.php?id=<?php echo $id;?>">Home</a></li>
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

//$query="SELECT * FROM staff WHERE User_ID='$id'";
$query="SELECT * FROM auth WHERE uname='$id' AND position='instructor'";
$result=$conn->query($query);

if($conn->query($query)==TRUE)
{
	while($row=$result->fetch_assoc())
	{
		echo "<h1>Welcome ".$row["fname"]."</h1>";
	}
	echo 
	"<div class='row'>
		<div class='column' style='background-color:#aaa;'>
			<!--<h2 style='color:#000000;'>ASSIGNMENTS:</h2>-->
			<a href='ins_view.php?id=$id'><h3>ASSIGNMENTS</h3></a>
			<a href='quiz.html'><h3>SET PAPER</h3></a>

		</div>
		<div class='column' style='background-color:#bbb;'>
			<!--<h2 style='color:#000000;'>EXAMS:</h2>-->
		</div>
	</div>";
}
else
{
	echo "Error: ".$query. "<br>" . $conn->error;
}

?>