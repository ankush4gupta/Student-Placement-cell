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
					
          $email = $_POST['email'];
          $password = $_POST['password'];

          $query = "select * from registration where email = '$email'";
          $result = mysqli_query($db,$query);
          $row = mysqli_num_rows($result);
        
          if($row>0){
          
          
           echo "<script>alert('Email id already exists. Please try with another email')</script>";
        }else{


         
					$q = "INSERT INTO `registration`(`name`,`email`,`password`) 
              VALUES ('$name','$email','$password')";
               
          $result = mysqli_query($db,$q)  ;
         
					if($result)
					{
            echo "<script>alert(' Registration Successfull')</script>";
            header ("Location:student.php");
           }
					else
					{
						echo "<script>alert(' Registration Fail')</script>";
					}
        }
				}
				
?>