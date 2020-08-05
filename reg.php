<?php
session_start();

include"db_conn/conn.php";


$fname=$_POST['t2'];
$lname=$_POST['t3'];
$email=$_POST['t4'];
$password=$_POST['t5'];
$cpassword=$_POST['t6'];

$sql = "INSERT INTO reg(fname,lname,email,password,cpassword) VALUES ('$fname','$lname','$email','$password','$cpassword')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['name']=$fname;
    echo "<script type='text/javascript'>";    
    echo "alert('Registered Successfully');";
    echo "window.location.href='signin.html';";
    echo "</script>";
} else {

	echo "<script type='text/javascript'>";
    echo "alert('please try again later');";
    echo "window.location.href='signup.html';";
    echo "</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
