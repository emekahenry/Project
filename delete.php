<?php 
 include("connection.php");
 $id = $_GET["id"];

 $sql = "DELETE FROM users WHERE id='$id'";
  if (mysqli_query($connection, $sql)) {
    echo '<script type ="text/javascript">
            alert("Records Deleted, Successfully.")
            
            window.location.assign("tables.php")</script>';
  }

?>