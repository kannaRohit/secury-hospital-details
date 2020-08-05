<?php
include"db_conn/conn.php";


$public=$_POST['t1'];
$private=$_POST['t2'];
$secret=$_POST['t3'];


$sql = "INSERT INTO key_reg(public_key,private_key,secret_key) VALUES ('$public','$private','$secret')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('Successfully key Generated please Note This Key Forther Refrence $secret');";
    echo "window.location.href='/mail/login_action.php';";
    echo "</script>";
} else {

	echo "<script type='text/javascript'>";
    echo "alert('please try again later');";
    echo "window.location.href='/mail/demo/login_action.php';";
    echo "</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
