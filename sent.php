<?php
include"db_conn/conn.php";

$sender=$_POST['t0'];
$email=$_POST['t1'];
$patient=$_POST['t2'];
$phone=$_POST['t3'];
$sex=$_POST['t4'];
$special=$_POST['t5'];
$hospital=$_POST['t6'];
$date=$_POST['t7'];
$medical=$_POST['t8'];
$secret_key=$_POST['t9'];



$sql = "INSERT INTO sent(email,Sender,name,phone,	sex,specialization,hospital,date,medical,secret_key) VALUES ('$email','$sender','$patient','$phone','$sex','$special','$hospital','$date','$medical','$secret_key')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('Successfully Sent Message');";
    echo "window.location.href='login_action.php';";
    echo "</script>";
} else {

	echo "<script type='text/javascript'>";
    echo "alert('Please Try Again Later');";
    echo "window.location.href='login_action.php';";
    echo "</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
