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
    <title>Personal Details</title>
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
     <h2>Fill Details:</h2>
    <form action="form.php" method="post" enctype="multipart/form-data">
    <div>
        <div style="float: left;">
         <ul>
            <li>Student name <br>
                <input type="text" name="fname" id="" placeholder="first name">
                <input type="text" name="lname" id="" placeholder="last name">
            </li>
            <li> Dob & Gender <br>
                <input type="date" name="dob" id="" placeholder="date of birth">
                <input type="text" name="gender" id="" placeholder="gender">
            </li>
            <li>Mobile & Email <br>
                <input type="tel" name="mobile" id="" placeholder="mobile number">
                <input type="email" name="email" id="" placeholder="email">
            </li>
        
       
            <li>Father's & Mother's name <br>
                <input type="text" name="father" id="" placeholder="father's name">
                <input type="text" name="mother" id="" placeholder="mother's name">
            </li>
            <li>Nation & State  <br>
                <input type="text" name="nation" id="" placeholder="nation">
                <input type="text" name="state" id="" placeholder="state">
            </li>
            <li> City & Street  <br>
                <input type="text" name="city" id="" placeholder="city">
                <input type="text" name="address" id="" placeholder="address">

            </li>
            <li> Photo :
                <input type="file"  name="photo" id="button" >
               
            </li>
         </ul>
            
        </div>
        <div style="float: right;">
            <ul>
            <li> Graduation: <br>
                <input type="text" name="ginstitute" id="" placeholder="institute name">
                <input type="text" name="gstream" id="" placeholder="stream"> <br>
                <input type="text" name="gyear" id="" placeholder="passing year">
                <input type="text" name="ggrade" id="" placeholder="grades">
            </li>
            <li> Intermediate: <br>
                <input type="text" name="iinstitute" id="" placeholder="institute name">
                <input type="text" name="istream" id="" placeholder="stream"> <br>
                <input type="text" name="iyear" id="" placeholder="passing year">
                <input type="text" name="igrade" id="" placeholder="grades">
            </li>
            <li> High School: <br>
                <input type="text" name="hinstitute" id="" placeholder="institute name">
                <input type="text" name="hstream" id="" placeholder="stream"> <br>
                <input type="text" name="hyear" id="" placeholder="passing year">
                <input type="text" name="hgrade" id="" placeholder="grades">

            </li>
            <li> C.V :
                <input type="file"  name="cv" id="button" >
               
            </li>
            <li> Bio:
            <input type="text" name="bio" id="" placeholder="describe yourself in one line.">
            </li>
           
                
            
        </ul> 
        
        </div>
    
</div>
<input type="submit" value="Upload" class="upload" name="sub">
    </form>
</body>
</html>
