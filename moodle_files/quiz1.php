<?php
$numofques=$_POST['numofques'];
?>

<form action="quiz2.php?id=<?php echo $numofques?>" method="POST" enctype="multipart/form-data">
		<?php 
		  for($i=1;$i<=$numofques;$i++)
		  {
		?>
			Enter Question.No-<?php echo $i ?>:
			<input type="text" name="q<?php echo $i ?>" style="font-size: 18pt; height: 40px; width:50%; ">
			<br><br>
			Option-1:<input type="text" name="q<?php echo $i ?>op1">
			Option-2:<input type="text" name="q<?php echo $i ?>op2">
			Option-3:<input type="text" name="q<?php echo $i ?>op3">
			Option-4:<input type="text" name="q<?php echo $i ?>op4">
			<br><br>
			Answer:<input type="text" name="ans<?php echo $i ?>">			
			<br><br><br><br><br>
		<?php
		  }
		  //$j="q".$i;
		  //echo "q".$i;
		//echo $j;
		?>
		  <input type="submit">
</form>