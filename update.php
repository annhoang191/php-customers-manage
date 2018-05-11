<?php
	include('connect_db.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$mail = $_POST['email'];
		$money = $_POST['money'];
		$addr = $_POST['address'];
		mysqli_query($conn,"update `customers`
			set firstname='$firstname', lastname='$lastname', email='$mail', spent_money='$money', address='$addr'
			where id='$id'");
	}
?>
