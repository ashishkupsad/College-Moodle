
<html>
<head>
    <meta charset=UTF-8>
    <title>
	    QUIZ
    </title>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
</head>


<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

?>

<div>
<div>
<center><h1 style="color:orange">QUIZ</h1></center>
<center><h3><p id="demo" style="color:#FF0000">COUNTDOWN:</p></h3></center>
	<hr><hr>
		<div>
			<?php
				 $lines=1;
				 $count=0;
				 $n=0;
				 $c=1;
				 $f1 = fopen("questions.txt","r");
				 $f2 = fopen("options.txt","r");
				 $f3 = fopen("answers.txt","r");
				 $f4 = fopen("numofques.txt","r");
				 $line4= fgets($f4);
				 $int=(int)$line4;
				 for($k=0;$k<$int;$k++)
				 {
					?>
							<form action="studentans.php?id=<?php echo $id?>" id="form<?php echo $c?>" method="POST" enctype="multipart/form-data">
					<?php		
					 while(!feof($f1))
					 {
						$n++;
						$line = fgets($f1);
						echo "<p align=center>$c)$line</p>";
						echo "<br>";
						
						while(!feof($f2))
						{
							$line1 = fgets($f2);
							?>
							<center><input type="radio" name="radio<?php echo $c?>" value="<?php echo $line1 ?>"><?php echo $line1 ?></center>
							<?php
							$count++;
							if($count==4)
							{
								$count=0;
								break;
							}
						}
						//echo "<hr>";
						if($lines==$int)
						{
							break;
						}
						echo "<hr>";
						$lines++;
						$c++;
						//echo "<br><br><br>";
					 }
					 if($lines==$int)
						{
							break;
						}
				 }
			?>		
			
		</div>
		<hr><hr>
		<center><input type="submit" value="submit"></center>
	</form>
	
</div>	
</div>



<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 8, 2020 19:30:15").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = "COUNTDOWN:" + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
	 document.getElementById("form1").submit();
	window.alert("Time is up. Press OK to continue.");
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>



</body></html>