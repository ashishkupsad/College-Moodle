<?php include("config.php");

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

 $name=$id;
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
?>

<!DOCTYPE html>
<html>
 <head>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
  <title>Moodle</title>
 </head>
 <body>
  <div id="content" style="margin-top:10px;height:100%;">
   <center><h1>Moodle - Discussion Forum</h1></center>
   <div class="chat">
    <div class="users">
     <?php include("users.php");?>
    </div>
    <div class="chatbox">
     <?php
     if(isset($_SESSION['user'])){
      include("chatbox.php");
     }else{
      $display_case=true;
      include("clogin.php");
     }
     ?>
    </div>
   </div>
  </div>
 </body>
</html>