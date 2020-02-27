<?php
// Start SESSION
session_start();

// 1. Connect
require("connect.php");

//checkLogin.php

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
//echo $user . ", " . $pass;

// 2. SELECT SQL
$sql = "SELECT * FROM student WHERE USER='$user' AND PASS='$pass'";

echo $sql;

// 3. Execute SQL
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) { // Login OK

    $row = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $row['USER'];
    $_SESSION['name'] = $row['STU_NAME'];


    header("Location:show_status.php");
}
else {
    header("Location:login.php");
}


?>