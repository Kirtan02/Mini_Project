<?php

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['owid']) || empty($_POST['disid']) || empty($_POST['srno']) || empty($_POST['medtype']) || empty($_POST['medname']) || empty($_POST['quant'])){

 $error = "Please Fill the details";
 }
else
{
$oid=$_POST['owid'];
$did=$_POST['disid'];
$sno=$_POST['srno'];
$mtype=$_POST['medtype'];
$mname=$_POST['medname'];
$quanty=$_POST['quant'];
$dte=$_POST['Date'];
    
echo 'Hello';

$conn = new mysqli("localhost", "root", "123","mediorder");

//$db = mysqli_select_db($conn, "mediorder");

$quer = "INSERT INTO orders(Id,D_id,Srno,Medicine_Type,Medicine_Name,Quantity,Date)
VALUES('$oid', '$did', '$sno','$mtype','$mname','$quanty','$dte')";
    
if ($conn->query($quer) === TRUE) {
 echo "New record created successfully";
} else {
    echo "Error: " . $quer . "<br>" . $conn->error;
}


//header("Location: welcome.php");

$conn->close();
}
}
?>
