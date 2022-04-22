<?php  
include('connection.php');
session_start();

 ?>

<?php

//include "dbConn.php"; // Using database connection file here

$L = $_GET['email']; // get id through query string

$qry = mysqli_query($db,"select * from student where email='$L'"); // select query

$row = mysqli_fetch_array($qry); // fetch data

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
                <input type="text" name="fname" id="" value="<?php echo $row['fname'];?>" placeholder="first name" readonly>
                <input type="text" name="lname" id="" value="<?php echo $row['lname'];?>" placeholder="last name"readonly>
            </li>
            <li> Dob & Gender <br>
                <input type="date" name="dob" id=""  value="<?php echo $row['dob'];?>"placeholder="date of birth" readonly>
                <input type="text" name="gender" id="" value="<?php echo $row['gender'];?>" placeholder="gender" readonly>
            </li>
            <li>Mobile & Email <br>
                <input type="tel" name="mobile" id="" value="<?php echo $row['mobile'];?>" placeholder="mobile number" readonly>
                <input type="email" name="email" id="" value="<?php echo $row['email'];?>" placeholder="email" readonly>
            </li>
        
       
            <li>Father's & Mother's name <br>
                <input type="text" name="father" id="" value="<?php echo $row['father'];?>" placeholder="father's name" readonly>
                <input type="text" name="mother" id="" value="<?php echo $row['mother'];?>" placeholder="mother's name" readonly>
            </li>
            <li>Nation & State  <br>
                <input type="text" name="nation" id="" value=" <?php echo $row['nation'];?> " placeholder="nation" readonly>
                <input type="text" name="state" id="" value="<?php echo $row['state'];?>" placeholder="state" readonly>
            </li>
            <li> City & Street  <br>
                <input type="text" name="city" id="" value="<?php echo $row['city'];?>" placeholder="city" readonly>
                <input type="text" name="address" id="" value="<?php echo $row['address'];?>" placeholder="address" readonly>

            </li>
            
         </ul>
            
        </div>
        <div style="float: right;">
            <ul>
             Photo :
             <BR>
            <img src="images/<?=$row['photo'];?>" style="width:120px;height:133px; margin-right:10px;" >
               
            
            <li> Graduation: <br>
                <input type="text" name="ginstitute" id="" value="<?php echo $row['ginstitute'];?>" placeholder="institute name" readonly>
                <input type="text" name="gstream" id="" value="<?php echo $row['gstream'];?>" placeholder="stream" readonly> <br>
                <input type="text" name="gyear" id="" value="<?php echo $row['gyear'];?>" placeholder="passing year" readonly>
                <input type="text" name="ggrade" id="" value="<?php echo $row['ggrade'];?>" placeholder="grades" readonly>
            </li>
            <li> Intermediate: <br>
                <input type="text" name="iinstitute" id="" value="<?php echo $row['iinstitute'];?>" placeholder="institute name" readonly>
                <input type="text" name="istream" id="" value="<?php echo $row['istream'];?>" placeholder="stream" readonly> <br>
                <input type="text" name="iyear" id="" value="<?php echo $row['iyear'];?>" placeholder="passing year" readonly>
                <input type="text" name="igrade" id="" value="<?php echo $row['igrade'];?>" placeholder="grades" readonly>
            </li>
            <li> High School: <br>
                <input type="text" name="hinstitute" id="" value="<?php echo $row['hinstitute'];?>" placeholder="institute name" readonly>
                <input type="text" name="hstream" id="" value="<?php echo $row['hstream'];?>" placeholder="stream" readonly> <br>
                <input type="text" name="hyear" id="" value="<?php echo $row['hyear'];?>" placeholder="passing year" readonly>
                <input type="text" name="hgrade" id="" value="<?php echo $row['hgrade'];?>" placeholder="grades" readonly>

            </li>
           
                
            
        </ul> 
        
        </div>
    
</div>

    </form>
  
</html>
