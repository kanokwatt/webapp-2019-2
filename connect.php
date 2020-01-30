<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$sql = "SELECT STATUS_ID, STATUS_TH, STATUS_EN FROM status";
$sql = "SELECT * FROM status";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["STATUS_ID"]. " - Name: " . $row["STATUS_TH"]. " " . $row["STATUS_EN"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>