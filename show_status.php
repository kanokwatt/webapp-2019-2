<html>

<head></head>

<body>
    <form action="add_status.php" method="get">
    <table border="1">
        <tr>
            <td>STATUS ID</td>
            <td><input type="text" name="status_id"></td>
        </tr>
        <tr>
            <td>STATUS THAI</td>
            <td><input type="text" name="status_th"></td>
        </tr>
        <tr>
            <td>STATUS ENGLISH</td>
            <td><input type="text" name="status_en"></td>
        </tr>  
        <tr>
            <td colspan="2"><input type="submit" value="ADD"></td>
        </tr>              
    </table>
    </form>

    <table border="1">
        <tr>
            <td>STATUS ID</td>
            <td>STATUS THAI</td>
            <td>STATUS ENGLISH</td>
        </tr>
        <?php
    require("connect.php");

    //$sql = "SELECT STATUS_ID, STATUS_TH, STATUS_EN FROM status";
    $sql = "SELECT * FROM status";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["STATUS_ID"]. " - Name: " . $row["STATUS_TH"]. " " . $row["STATUS_EN"]. "<br>";
            echo "<tr>";
            echo "<td>" . $row["STATUS_ID"]. "</td>";
            echo "<td>" . $row["STATUS_TH"]. "</td>";
            echo "<td></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>

    </table>

</body>

</html>