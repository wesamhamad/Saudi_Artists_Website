<?php 
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

  $db = mysqli_connect('localhost', 'root', '', 'Login');
  $username = "";
  $email = "";

  if (isset($_POST['register'])) {
  	$username = $_POST['Name'];
  	$email = $_POST['Email'];
  	$password = $_POST['Password'];

  
  	$sql_e = "SELECT * FROM users WHERE Email='$email'";
  	
  	$res_e = mysqli_query($db, $sql_e);

  	 if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "عذرًا...البـريـد الإلكـتـرونـي مُـسجـل مسـبـقـًا"; 	
  	}else{
           $query = "INSERT INTO users (Name, Email, Password) VALUES ('$username', '$email', '".md5($password)."')";
           $results = mysqli_query($db, $query);
		   header("Location:LoginPage.php");
		   exit();
  	}
  }
?>