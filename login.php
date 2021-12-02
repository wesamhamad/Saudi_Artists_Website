<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

    if (empty($_POST['e-mail']) || empty($_POST['pass'])) {
    $error = "قـم بـتـعـبـئـة جـمـيـع الـحـقول";
        
}

else{
// Define $email and $password
$email = $_POST['e-mail'];
$password = $_POST['pass'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "Login");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT Email, Password FROM users WHERE Email = '$email' AND Password = md5($password); ";


// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->bind_result($email, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row 
{
$_SESSION['login_user'] = $email; // Initializing Session
header("location: profile.php"); // Redirecting To Profile Page
}else
$error = "البــريـد الإلكـتـرونـي أو كـلـمـة المـرور غـير صـحيـحـة";
}
mysqli_close($conn); // Closing Connection
}
?>