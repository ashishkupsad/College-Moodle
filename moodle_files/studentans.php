<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

if($_SERVER['REQUEST_METHOD'] =='POST')
{
	$f1 = fopen('answers.txt', 'r');
	$i=1;
	$m=0;
	$c=1;
	$hem=0;
	$count=0;
	$f4 = fopen("numofques.txt","r");
	$line4= fgets($f4);
	$int=(int)$line4;
	while(!feof($f1))  
	{
		$m++;
		$line = fgets($f1);
		$l1=strlen($line)-1;
		for($j=0;$j<$l1;$j++)
		{
			if($line[$j]==$_POST['radio'.$c][$j])
			{
				$hem++;
			}
		}
		if($hem==$l1)
		{
			$count++;
		}	
		if($m==$line4)
		{
			break;
		}
		$c++;
		$hem=0;
	}
	echo "Your Score Is =".$count;
	echo "<div style='background-color:#bbb;'><h1>Created Succesfully.</h1></div>";    
}

else{
    echo "Login denied";
}



?>