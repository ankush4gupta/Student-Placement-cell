<?php  
include('connection.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPC</title>
</head>
<style>
    body{
      background-color: skyblue;
    }
       
       ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
.one{
   
    text-align: center;
    margin-top: 20px;
    margin-bottom: 50px;

}
.one p{
    font-size: 40px;
    font-weight:bold;
    color: black;
}

.div{
    height: auto;
    width: auto;
    background-color: white;
    border-radius:5px;
    
    margin: 20px 50px 10px 50px ;

    display: block;
  color: black;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  font-weight: bold;
  

}

    

.div hr{
    width : 400px;
    float : left;
}

.div p{
    font-size: 15px;
}
    
 

    </style>
<body >

<ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li style=" display: block; color: white; text-align: center; padding: 14px 16px; margin-left: 300px; font-size: 18 px;"
        >About Page</li>
        
      </ul>



      <div class="one">
     <p>ABOUT US</p> <HR style="WIDTH:200PX;"> 
      WHO WE ARE  
      </div>
    <div>
    
    <div class="div" >
     We are Study Hall  <br>
     <hr>  <br>
     <p>  This is Student Placement Cell Software for students of The Study Hall College. <br>
       In this software students have to enroll theirself . They have to add their all details. <br>
       Details can be  
     </p>
    
   

    
    </div>
  
    
    </div>
   

  


    </body>
</html>