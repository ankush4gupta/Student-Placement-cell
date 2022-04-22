<?php
  include('connection.php');
  session_start();


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  if(isset($_POST['sub']))
 
				{
     $umail = $_POST['umail']; 				
	$email = $_POST['email']; 
    $subject = $_POST['subject'];  
    $date_time = $_POST['date_time'];  
    $message = $_POST['message'];  

    $cname = $_FILES["cv"]["name"];

    $ctname = $_FILES["cv"]["tmp_name"];
     

    $uploads_dir = 'mails';
     
    move_uploaded_file($cname,$uploads_dir.'/'.$cname);

   $q= "INSERT INTO `mail`( `user_mail`,`email`, `subject`, `date_time`, `message`, `cv`)
     VALUES ('$umail','$email','$subject','$date_time','$message','$cname')";



    $result = mysqli_query($db,$q);
            
    if($result)
 
    {
echo "<script>alert('Mail send')</script>";

    }
    else
    {
        echo "<script>alert(' Fail')</script>";
    }
}
  
?>