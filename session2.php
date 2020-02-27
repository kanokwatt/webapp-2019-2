<?php
// page 1
session_start();

$_SESSION['user'] = "Blue";

?>
<html>
    <head><title>Page 1</title></head>
    <body>
    <h1>Page 1</h1>
    <h3>Welcome, <?php echo $_SESSION['user'];?></h3>
    <a href="session3.php">Page 2</a>
    
    </body>
</html>