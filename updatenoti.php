<?php  
include('connection.php');
session_start();

 ?>

<?php

//include "dbConn.php"; // Using database connection file here

$mail = $_GET['email']; // get id through query string

$qry = mysqli_query($db,"select * from notification where email='$mail'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $company = $_POST['company'];
    $post = $_POST['post'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $notice = $_POST['notice'];
	
    $edit = mysqli_query($db,"update notification set company='$company', post='$post', date='$date', email='$email', notice='$notice' where email='$mail'");
	
    if($edit)
    { echo "successfully";
        mysqli_close($db); // Close connection
       // header("location:uploadnoti.php"); // redirects to all records page
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
    <title>Notification</title>
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
<h2>Update Notification</h2>
<form method="POST">
Company Name:
<input type="text" name="company" id="" value="<?php echo $data['company']; ?>" placeholder="company name"> 
Post Name:
<input type="text" name="post" id="" placeholder="post name"  value="<?php echo $data['post']; ?>"> <br>
Email:
<input type="email" name="email" id="" placeholder="email"  value="<?php echo $data['email']; ?>" > 
Last date to apply:
<input type="text" name="date" id="" placeholder="date"  value="<?php echo $data['date']; ?>" > <br>
Notice: 
<br>
<textarea name="notice" id="textarea" cols="30" rows="10"><?php echo $data['notice']; ?></textarea>

<!-- <input type="text" name="notice" id="textarea"  value="" > -->
<input type="submit" name="update" value="Update">
</form>


</body>
