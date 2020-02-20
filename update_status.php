<?php
// update_status.php

// 1. Connect
require("connect.php");

$status_id = $_GET['status_id'];
$status_th = $_GET['status_th'];
$status_en = $_GET['status_en'];

$send = $_GET['send'];

// echo $status_id;
// echo $status_th;
// echo $status_en;

// Check for Delete or Edit
if($send == 'Edit') {   
// 2. Select
$sql = "UPDATE status ";
$sql .= "SET STATUS_TH = '$status_th', STATUS_EN = '$status_en' ";
$sql .= "WHERE STATUS_ID = $status_id";

echo $sql;

// 3. Execute SQL
if (mysqli_query($conn, $sql)) {
    echo "Update record successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:show_status.php");

}
else if($send == 'Delete') {
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
}
?>