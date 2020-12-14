<?php

//processing


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$remail=$_POST['remail'];
	$gender=$_POST['gender'];
	$dept=$_POST['dept'];
	$batch=$_POST['batch'];
	$position=$_POST['position'];
	
	if(!empty($fname) && !empty($lname) && !empty($uname) && !empty($pass) && !empty($remail) &&  !empty($dept) && !empty($batch)){
		
		include('connection.php');
		
		mysqli_query($dbc, "INSERT INTO auth VALUES('$fname','$lname','$uname','$pass','$remail','$gender','$batch','$dept','$position')");
		
		//$registered = mysqli_affected_rows();
		echo "<h3>Registration successful</h3>";
		//echo '<a href="">';
	}
	else
	{
		echo "Fill all fields";	}
	
}
else{
	echo "Login denied";
}


?>