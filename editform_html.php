<?php  
include('connection.php');
session_start();

 ?>

<?php

//include "dbConn.php"; // Using database connection file here

$email = $_SESSION['email']; // get id through query string

$qry = mysqli_query($db,"select * from student where email='$email'"); // select query

$row = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['sub'])) // when click on Update button
{
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $city =$_POST['city'];
    $nation = $_POST['nation'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    //$photo = $_POST['photo'];
   
    $state = $_POST['state'];
    $hinstitute = $_POST['hinstitute'];
    $hstream = $_POST['hstream'];
    $hyear = $_POST['hyear'];
    $hgrade = $_POST['hgrade'];

    $iinstitute = $_POST['iinstitute'];
    $iyear = $_POST['iyear'];
    $istream = $_POST['istream'];
    $igrade = $_POST['igrade'];

    $ginstitute = $_POST['ginstitute'];
    $gyear = $_POST['gyear'];
    $gstream = $_POST['gstream'];
    $ggrade = $_POST['ggrade'];
    $bio = $_POST['bio'];

    //$cv = $_POST['cv'];

    $edit = mysqli_query($db,"update student set fname = '$fname', gender = '$gender', lname = '$lname', father = '$father', dob = '$dob', gender = '$gender', mobile = '$mobile', city = '$city',  state = '$state', mother ='$mother', nation  = '$nation',  address  = '$address', 
    hinstitute = '$hinstitute',hyear = '$hyear',hstream='$hstream' ,hgrade='$hgrade',iinstitute = '$iinstitute',iyear = '$iyear',istream='$istream' ,igrade='$igrade', ginstitute = '$ginstitute',gyear = '$gyear',gstream='$gstream' ,ugrade='$ggrade', bio = '$bio' where email ='$email'" );

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:viewprofile.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "<script>alert(' Fail')</script>";
    }    	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
</head>
<style>
    
    input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
#button{  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: white;

}
.upload{
    background-color: #008CBA;
    max-width: max-content;
    margin-left: 400px;
    color: white;
}
.upload:hover{
    
    background-color: green;
}
</style>
<body> 
     <h2>Edit Details:</h2>

    

    <form action="" method="post" enctype="multipart/form-data">
    <div>
        <div style="float: left;">
         <ul>
            <li>Student name <br>
                <input type="text" name="fname" id="" value="<?php echo $row['fname'];?>" placeholder="first name" >
                <input type="text" name="lname" id="" value="<?php echo $row['lname'];?>" placeholder="last name">
            </li>
            <li> Dob & Gender <br>
                <input type="date" name="dob" id=""  value="<?php echo $row['dob'];?>"placeholder="date of birth">
                <input type="text" name="gender" id="" value="<?php echo $row['gender'];?>" placeholder="gender">
            </li>
            <li>Mobile & Email <br>
                <input type="tel" name="mobile" id="" value="<?php echo $row['mobile'];?>" placeholder="mobile number">
                <input type="email" name="email" id="" value="<?php echo $row['email'];?>" placeholder="email">
            </li>
        
       
            <li>Father's & Mother's name <br>
                <input type="text" name="father" id="" value="<?php echo $row['father'];?>" placeholder="father's name">
                <input type="text" name="mother" id="" value="<?php echo $row['mother'];?>" placeholder="mother's name">
            </li>
            <li>Nation & State  <br>
                <input type="text" name="nation" id="" value=" <?php echo $row['nation'];?> " placeholder="nation">
                <input type="text" name="state" id="" value="<?php echo $row['state'];?>" placeholder="state">
            </li>
            <li> City & Street  <br>
                <input type="text" name="city" id="" value="<?php echo $row['city'];?>" placeholder="city">
                <input type="text" name="address" id="" value="<?php echo $row['address'];?>" placeholder="address">

            </li>
            <li> Photo :
                <input type="file"  name="photo" value="<?php echo $row['photo'];?>" id="button" >
               
            </li>
         </ul>
            
        </div>
        <div style="float: right;">
            <ul>
            <li> Graduation: <br>
                <input type="text" name="ginstitute" id="" value="<?php echo $row['ginstitute'];?>" placeholder="institute name">
                <input type="text" name="gstream" id="" value="<?php echo $row['gstream'];?>" placeholder="stream"> <br>
                <input type="text" name="gyear" id="" value="<?php echo $row['gyear'];?>" placeholder="passing year">
                <input type="text" name="ggrade" id="" value="<?php echo $row['ggrade'];?>" placeholder="grades">
            </li>
            <li> Intermediate: <br>
                <input type="text" name="iinstitute" id="" value="<?php echo $row['iinstitute'];?>" placeholder="institute name">
                <input type="text" name="istream" id="" value="<?php echo $row['istream'];?>" placeholder="stream"> <br>
                <input type="text" name="iyear" id="" value="<?php echo $row['iyear'];?>" placeholder="passing year">
                <input type="text" name="igrade" id="" value="<?php echo $row['igrade'];?>" placeholder="grades">
            </li>
            <li> High School: <br>
                <input type="text" name="hinstitute" id="" value="<?php echo $row['hinstitute'];?>" placeholder="institute name">
                <input type="text" name="hstream" id="" value="<?php echo $row['hstream'];?>" placeholder="stream"> <br>
                <input type="text" name="hyear" id="" value="<?php echo $row['hyear'];?>" placeholder="passing year">
                <input type="text" name="hgrade" id="" value="<?php echo $row['hgrade'];?>" placeholder="grades">

            </li>
            <li> C.V :
                <input type="file"  name="cv" value="<?php echo $row['cv'];?>" id="button" >
               
            </li>
            <li> Bio:
            <input type="text" name="bio" id=""   value="<?php echo $row['bio'];?>">
            </li>
           
                
            
        </ul> 
        
        </div>
    
</div>
<input type="submit" value="Update" class="upload" name="sub">
    </form>
  
</html>
