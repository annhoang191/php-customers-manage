<?php
	include('connect_db.php');
	if(isset($_POST['add'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email = $_POST['email'];
		$money = $_POST['money'];
		$address = $_POST['addr'];
		mysqli_query($conn,"insert into `customers` (firstname, lastname, email, spent_money, address)
			values ('$firstname', '$lastname', '$email', '$money', '$address')");
	}
?>
