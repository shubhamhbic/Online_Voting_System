<?php
if ( isset($_GET["id"]))
 {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_evoting1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM tbl_users WHERE id=$id";
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    $conn->query($sql);
}


header("location:users.php");
exit;
?>