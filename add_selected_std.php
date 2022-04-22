<?php
  include('connection.php');
  session_start();
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
<h2>Add Students in  <?php  $c = $_SESSION['name'];
       echo  "$c"; ?>  Company</h2>
<form method="POST">
Student Name:
<input type="text" name="name" id=""  placeholder="student name"> <br>
Company Name:
<input type="text" name="companyname" id=""  placeholder="company name"> <br>


Post Name:
<input type="text" name="post" id="" placeholder="post name"  > <br>
Stream:
<input type="text" name="stream" id="" placeholder="Stream"   > <br>
Passing Year:
<input type="text" name="pyear" id="" placeholder="passing year"   > <br>

<input type="submit" name="update" value="Update">
</form>


</body>
<?php 

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $company = $_POST['companyname'];
    $stream = $_POST['stream'];
    $post = $_POST['post'];
    $pyear = $_POST['pyear'];

    $q = "INSERT INTO `selected`( `name`, `post`, `stream`, `pyear`, `companyname`) 
    VALUES ('$name','$post','$stream','$pyear','$company')";
     $result = mysqli_query($db,$q);
            
     if($result)
  
     {
echo "<script>alert('Details Added in the list  successfull')</script>";

     }
     else
     {
         echo "<script>alert('Unable to add . Please try again)</script>";
     }
 }




?>