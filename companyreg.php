<?php
  include('connection.php');
  session_start();


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  if(isset($_POST['sub']))
 
				{
					
	$name = $_POST['name']; 
  $mobile = $_POST['mobile']; 
  $email = $_POST['email'];  
  $address = $_POST['address'];  
  $password = $_POST['password'];  
  $message = $_POST['message'];

  $q =" INSERT INTO `company`( `name`, `mobile`, `address`, `email`, `password`, `message`)
   VALUES ('$name','$mobile','$address','$email','$password','$message') ";


$result = mysqli_query($db,$q);
            
                  if($result)
               
                  {
                    header("Location: company.php");
          echo "<script>alert('Registration Successfull')</script>";

        
                  }
                  else
                  {
                      echo "<script>alert(' Registration Fail')</script>";
                  }
              }
   