<?php
  include('connection.php');
  session_start();


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  if(isset($_POST['sub']))
 
				{
					
	$fname = $_POST['fname']; 
    $lname = $_POST['lname'];  
    $dob = $_POST['dob'];  
    $gender = $_POST['gender'];  
    $mobile = $_POST['mobile'];  
    $email = $_POST['email'];  
    $father = $_POST['father'];
    $mother = $_POST['mother'];  
    $nation = $_POST['nation'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address']; 
    
    $pname = $_FILES["photo"]["name"];

    $tname = $_FILES["photo"]["tmp_name"];

   
     
      
    $ginstitute = $_POST['ginstitute']; 
    $gstream = $_POST['gstream']; 
    $gyear = $_POST['gyear'];  
    $ggrade = $_POST['ggrade'];

    $iinstitute = $_POST['iinstitute'];  
    $iyear = $_POST['iyear'];  
    $istream = $_POST['istream'];  
    $igrade = $_POST['igrade']; 
     
    $hinstitute = $_POST['hinstitute'];  
    $hyear = $_POST['hyear'];  
    $hstream = $_POST['hstream'];  
    $hgrade = $_POST['hgrade'];  
    $bio =  $_POST['bio'];

    $cname = $_FILES["cv"]["name"];

    $ctname = $_FILES["cv"]["tmp_name"];
     

    $uploads_dir = 'images';
    
     
    move_uploaded_file($tname,$uploads_dir.'/'.$pname);
    move_uploaded_file($ctname,$uploads_dir.'/'.$cname);


          

         

            $q="INSERT INTO `student`( `fname`, `lname`, `dob`, `gender`, 
            `mobile`, `email`, `father`, `mother`, `nation`, `state`, `city`, `address`,
             `photo`, `ginstitute`, `gstream`, `gyear`, `ggrade`, `iinstitute`, `istream`, 
             `iyear`, `igrade`, `hinstitute`, `hstream`, `hyear`, `hgrade`, `cv`,`bio`) 
             VALUES ('$fname','$lname','$dob','$gender','$mobile','$email',
             '$father','$mother','$nation','$state','$city','$address',
             '$pname','$ginstitute','$gstream','$gyear','$ggrade','$iinstitute',
             '$istream','$iyear','$igrade','$hinstitute','$hstream','$hyear',
             '$hgrade','$cname' ,'$bio')";
              $result = mysqli_query($db,$q);
            
                  if($result)
               
                  {
          echo "<script>alert('Registration Successfull')</script>";
        
                  }
                  else
                  {
                      echo "<script>alert('Donor Registration Fail')</script>";
                  }
              }
				
?>