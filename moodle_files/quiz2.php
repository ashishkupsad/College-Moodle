<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

if($_SERVER['REQUEST_METHOD'] =='POST')
{
	$fp1 = fopen('questions.txt', 'w');
	$fp2 = fopen('options.txt', 'w');
	$fp3 = fopen('answers.txt', 'w');
	$fp4 = fopen('numofques.txt','w');
	fwrite($fp4,$id);
    for($i=1;$i<=$id;$i++)
	{
		//$_POST['"q".$i'];
		//$fp = fopen('question.txt', 'w');
		fwrite($fp1,$_POST["q".$i]."\n");
		fwrite($fp2,$_POST["q".$i."op1"]."\n");
		fwrite($fp2,$_POST["q".$i."op2"]."\n");
		fwrite($fp2,$_POST["q".$i."op3"]."\n");
		fwrite($fp2,$_POST["q".$i."op4"]."\n");
		fwrite($fp3,$_POST["ans".$i]."\n");
		
	}
	echo "<div style='background-color:#bbb;'><h1>Created Succesfully.</h1></div>";    
}

else{
    echo "Login denied";
}



?>