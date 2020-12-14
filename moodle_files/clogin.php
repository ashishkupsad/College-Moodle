<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

?>

 <h2>Type Password</h2>
 <h3>Your User ID Is Your Name:</h3><br/>
 <form action="index.php?id=<?php echo $id;?>" method="POST">
  <div>Your Password : <input type="password" name=<?php echo $id;?> placeholder="Password"/></div>
  <button>Submit & Start Chatting</button>
 </form>
 
 <?php
if(isset($_POST[$id]) && !isset($display_case)){
 $name=htmlspecialchars($_POST[$id]);
 if($name!=""){
  $sql=$dbh->prepare("SELECT name FROM chatters WHERE name=?");
  $sql->execute(array($name));
  if($sql->rowCount()!=0){
   $ermsg="<h2 class='error'>Name Taken. <a href='index.php'>Try another Name.</a></h2>";
  }else{
   $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
   $sql->execute(array($name));
   $_SESSION['user']=$name;
  }
 }else{
  $ermsg="<h2 class='error'><a href='index.php'>Please Enter A Name.</a></h2>";
 }
}elseif(isset($display_case)){
 if(!isset($ermsg)){
?>


<?php
 }else{
  echo $ermsg;
 }
}
?>