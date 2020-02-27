<?php
// page 2
session_start();

?>
<html>
    <head><title>Page 2</title></head>
    <body>
    <h1>Page 2</h1>
    <h3>Hello, <?php echo $_SESSION['user']; ?></h3>
    <a href="session2.php">Page 1</a>
    
    </body>
</html>