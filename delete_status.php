<?php
// delete_status.php

$status_id = $_GET['status_id'];
// echo $status_id;

// 1. Connect DB
require("connect.php");

// 2. Select SQL
$sql = "DELETE FROM status WHERE STATUS_ID = $status_id";

//echo $sql;

// 3. Execute SQL
if (mysqli_query($conn, $sql)) {
    echo "Delete record successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:show_status.php");
?>