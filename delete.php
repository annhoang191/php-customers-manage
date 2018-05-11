<?php
	include('connect_db.php');
	if(isset($_POST['del'])){
		$id=$_POST['id'];
		mysqli_query($conn,"delete from `customers` where id='$id'");
	}
?>
