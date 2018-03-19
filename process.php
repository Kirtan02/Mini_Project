

<?php

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['Name']) || empty($_POST['Password'])){

 $error = "Username or Password is Invalid";
 }

 else
 {
 //Define $user and $pass
 $user=$_POST['Name'];
 $_SESSION["username"] = $_POST['Name'];
 $pass=$_POST['Password'];
 $salt='3x%%$bf83#dls2qgdf';
 $passwo=md5($salt.$pass);
 //echo $passwo;
 $email=$_POST['Email'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = new mysqli("localhost", "root", "123");
 //Selecting Database
 $db = mysqli_select_db($conn, "login");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM user WHERE Name='$user' AND Password='$pass'");
     
//$quer = "INSERT INTO user (id,Name,Password,Email)
//VALUES('', '$user', '$passwo','$email')";

 $rows = mysqli_num_rows($query);
     
 if($rows == 1){
 header("Location: welcome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid";
 }
     
/*if ($conn->query($quer) === TRUE) {
 //echo "New record created successfully";
} else {
    echo "Error: " . $quer . "<br>" . $conn->error;
}*/


header("Location: welcome.php");

$conn->close();
 //mysqli_close($conn); // Closing connection
 }
}

 ?>
