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
    height: 150px;
    width: 490px;
    background-color: white;
    border-radius:5px;
    float: left;
    margin: 50px;

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
        >Contact Page</li>
        
      </ul>



      <div class="one">
     <p>CONTACT US</p> <HR style="WIDTH:200PX;"> 
      GET IN TOUCH  
      </div>
    <div>
    
    <div class="div" >
     Phone & Email  <br>
     <hr>  <br>
     <p>  Phone : +91 - 8881104454
     <br> <br>
     Email :  akgupta.02001@gmail.com
     </p>
    
    </div>
    <div class="div">
    Address
    <br> <hr> <br>
    <p> 
    Study Hall College, <br> 
    <br>
    Pipersand Lucknow -226008.
    </p>

    
    </div>
  
    
    </div>
   

  


    </body>
</html>