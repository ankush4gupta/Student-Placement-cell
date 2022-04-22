<?php
 include('connection.php');
 
    
 
    $sql = "DELETE FROM selected WHERE name ='" . $_GET["name"] . "'";
 
    if (mysqli_query($db, $sql)) {
 
        echo "Record deleted successfully";
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($db);
    }
    mysqli_close($db);
?>