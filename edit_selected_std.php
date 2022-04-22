<?php
  include('connection.php');
  session_start();
?>

<?php

//include "dbConn.php"; // Using database connection file here

$n = $_GET['s_number']; // get id through query string

$qry = mysqli_query($db,"select * from selected where s_number='$n'"); // select query

$r1 = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $post = $_POST['post'];
    $stream = $_POST['stream'];
    $pyear = $_POST['pyear'];

	
    $edit = mysqli_query($db,"update selected set name='$name', post='$post' , stream='$stream' , pyear='$pyear' where s_number='$n'");
	
    if($edit)
    {
       echo "successfull";
       // mysqli_close($db); // Close connection
       // header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Selected Student </title>
</head>
<style>
 input {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 }
  #textarea{
    width: 760px;
    height: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
font-size: 15px;
  }
}

</style>
<body> 
<h2>Edit Students Details in  <?php  $c = $_SESSION['name'];
       echo  "$c"; ?>  Company database.</h2>
<form method="POST">
Student Name:
<input type="text" name="name" id="" value="<?php echo $r1['name']; ?>" placeholder="student name"> <br>



Post Name:
<input type="text" name="post" id="" placeholder="post name"  value="<?php echo $r1['post']; ?>"> <br>
Stream:
<input type="text" name="stream" id="" placeholder="Stream"  value="<?php echo $r1['stream']; ?>" > <br>
Passing Year:
<input type="text" name="pyear" id="" placeholder="passing year"  value="<?php echo $r1['pyear']; ?>" > <br>

<input type="submit" name="update" value="Update">
</form>


</body>