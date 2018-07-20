<?php
$servername="166.62.26.2";
$username="nutrionics";
$password="nutrionics@123";
$dbname="nutrionics";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die('connection failed:'.$conn->connect_error);
}

if(isset($_POST['submit'])){
	//echo '<pre>'; print_r($_POST);exit;
	$sql="INSERT INTO contact(name,email,message,status)
	VALUES  ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."','0')";
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
		if(mail($to,$subject,$message,$headers)==true){
			$msg='success';
			$id=$conn->insert_id;
			$sql1='UPDATE contact SET status=1 WHERE id='.$id;
		//echo $sql1;exit;
		$result3=$conn->query($sql1);
		}
		else{
			$msg='fail';
		}
		header("Location: " . "http://" .$_SERVER['SERVER_NAME']. $pathInfo['dirname']."?message=".$msg."#bottom"); 
	}
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
$conn->close();
}
?>