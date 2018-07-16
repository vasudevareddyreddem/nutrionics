
<?php
if(isset($_POST['submit'])){
	
	include 'database.php';

	include 'index.php';
	$confirmpassword = "'".$_POST['confirmpassword']."'";
	$sql="INSERT INTO contact(name,email,message)
	VALUES  ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
	echo $sql;exit;

		//echo $sql;exit;
		if($conn->query($sql) === TRUE) {
			header('location:http://localhost/nutrionics/index.php');
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	
//$conn->close();
?>
