<?php
// Start the session
session_start();
?>
<?php

include"db_conn/conn.php";

$username=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT *  FROM reg where email='$username' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $_SESSION["mail"]= $username;
    echo "<script type='text/javascript'>";
    echo "alert('Logined Successfully');";
    echo "window.location.href='login_action.php';";
    echo "</script>";
    while($row = $result->fetch_assoc()) {
            }
   
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Username and Password are not match try again');";
    echo "window.location.href='signin.html';";
    echo "</script>";
}
$conn->close();
?>
