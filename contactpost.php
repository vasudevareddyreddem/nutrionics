<?php
$servername="43.255.154.8";
$username="nutrionics_db";
$password="nutrionics_db@123";
$dbname="nutrionics_db";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die('connection failed:'.$conn->connect_error);
}

if(isset($_POST['form_one']) && $_POST['form_one']==''){
	$sql2="INSERT INTO subscribe(mail) VALUES  ('".$_POST['mail']."')";
	//echo $sql2;exit;
	
	$currentPath = $_SERVER['PHP_SELF']; 
	$pathInfo = pathinfo($currentPath); 
	
	if($conn->query($sql2) === TRUE){
		$msg1="true";
		header("Location: " . "http://" .$_SERVER['SERVER_NAME']. $pathInfo['dirname']."?qqq=".$msg1."#bottom"); 
	}
	else{
		$msg1="false";
		header("Location: " . "http://" .$_SERVER['SERVER_NAME']. $pathInfo['dirname']."?qqq=".$msg1."#bottom"); 
	}
}

if(isset($_POST['form_one']) && $_POST['form_one']==1){
	//echo '<pre>'; print_r($_POST);exit;
	$sql="INSERT INTO contact(name,email,message,status)
	VALUES  ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."','0')";
	//echo $sql;exit;
	$to = "info@nutrionics.com";
	$name = $_POST['name'];
	$from = $_POST['email'];
	$subject = "Nutrionics - request";
	$message = 'Name :'.$name ."\n\n"." Message : ". $_POST['message'];
	$headers = "From:" . $from;
	$currentPath = $_SERVER['PHP_SELF']; 
	$pathInfo = pathinfo($currentPath); 
	//echo $pathInfo['dirname'];exit;
	if($conn->query($sql) === TRUE) {
		if(mail($to,$subject,$message,$headers)==true){
			$msg='success';
			$id=$conn->insert_id;
			$sql1='UPDATE contact SET status=1 WHERE id='.$id;
		//echo $sql1;exit;
		$result1=$conn->query($sql1);
		}
		else{
			$msg='fail';
		}
		header("Location: " . "http://" .$_SERVER['SERVER_NAME']. $pathInfo['dirname']."?message=".$msg."#bottom"); 
	}
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

}
$conn->close();
?>