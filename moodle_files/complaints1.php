<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
?>

<div>
    <h2>ADD A COMPLAINT</h2>

    <div>
        <form action="complaints2.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
			TYPE TEXT:
				<input type="text" name="chat">
            <input type="submit">
        </form>    
    </div>
</div>

</body></html>