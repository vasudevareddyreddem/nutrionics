<?php
$servername="localhost";
$username="root";
$password="";
$dbname="home";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die('connection failed:'.$conn->connect_error);
}

if(isset($_POST['submit'])){
	//echo '<pre>'; print_r($_POST);exit;
	$sql="INSERT INTO contact(name,email,message)
	VALUES  ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
	//echo $sql;exit;
	
	$to = "banuribhavya97@gmail.com";
	$name = $_POST['name'];
	$from = $_POST['email'];
	$subject = "Form submission";
	$message = $name ." wrote the following:" . "\n\n" . $_POST['message'];
	$headers = "From:" . $from;
	
	mail($to,$subject,$message,$headers);
	
	echo "Mail Sent. Thank you ";
	 $currentPath = $_SERVER['PHP_SELF']; 
	 $pathInfo = pathinfo($currentPath); 
	 //echo $pathInfo['dirname'];exit;
	if($conn->query($sql) === TRUE) {
			header("Location: " . "http://" .$_SERVER['SERVER_NAME']. $pathInfo['dirname']);
		  }
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
$conn->close();
}

