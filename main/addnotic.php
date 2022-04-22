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
<h2>Notification</h2>

<form action="" method="post">
Company Name:
<input type="text" name="company" id=""  placeholder="company name"> 
Post Name:
<input type="text" name="post" id="" placeholder="post name" > <br>
Email:
<input type="email" name="email" id="" placeholder="email" > 
Last date to apply:
<input type="text" name="date" id="" placeholder="date"  > <br>
Notice: 
<br>
<textarea name="notice" id="textarea" cols="30" rows="10"></textarea>
<!-- <input type="text" name="notice" id="textarea"> -->
<input type="submit" value="Upload" name=sub>


</form>
</body>


<?php
  include('connection.php');
 


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  if(isset($_POST['sub']))
 
				{
					
	$company = $_POST['company']; 
  $post = $_POST['post']; 
  $email = $_POST['email'];  
  $date = $_POST['date'];  
  $notice = $_POST['notice'];  

  $query = "select * from notification where email = '$email'";
  $result = mysqli_query($db,$query);
  $row = mysqli_num_rows($result);

  if($row>0){
  
  
   echo "<script>alert('Notice is already uploaded .Please goto Notification section to view and edit notice.')</script>";
   
}else{
 

  $q =" INSERT INTO `notification`( `company`, `post`, `email`, `date`, `notice`)
   VALUES ('$company','$post','$email','$date','$notice') ";


$result = mysqli_query($db,$q);
            
                  if($result)
               
                  {
          echo "<script>alert('Notification Upload  Successfull')</script>";

        
                  }
                  else
                  {
                      echo "<script>alert(' Fail')</script>";
                  }
              }
   



            }


?>