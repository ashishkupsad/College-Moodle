<?php

$person=$_POST['person'];

function val($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(strcmp($person,"Admin")==0)
{
	header("Location: login3.html");
}

if(strcmp($person,"Staff")==0)
{
	header("Location: login2.html");
}

if(strcmp($person,"Student")==0)
{
	header("Location: login1.html");
}


?>