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
    <title>Mails</title>
</head>
<STYle>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #F3F3F3;
}

li {
  float: left;
}

li a, button {
  display: block;
  color: BLACK;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
button {
border: none;
height: 46px;

}

li a:hover:not(.active) {
  background-color: LIGHTGRAY;
}

.active {
    background-color: #008CBA;
}
.active:hover{
    background-color: green;
    color: white;
    
}

/* -------------------------------------------------------------------------------------------------  */






#frame{
  margin-top: 10px;
  height: 470px;

  
  width: 100%;
  background-color: lightgray;
}
 
input {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}

.upload{
    background-color: #008CBA;
    max-width: max-content;
    margin-left: 350px;
    color: white;
}
.upload:hover{
    
    background-color: green;
}

</STYle>
<body> 
   

        <!-- The Modal -->
    
     


<!-- Modal content -->


  <form method="post" enctype="multipart/form-data" action="mail.php">
    Your Email: <input type="email" name="umail" placeholder="from"><br>
    Email: <input name="email" type="email" name="email" placeholder="to" ><br />
    Subject: <input name="subject" type="text"  placeholder="subject"><br />
    Date & Time: <input type="datetime-local" name="date_time" id=""  placeholder="date & time"> <br>
    Message:<br />
    <textarea name="message" rows="4" cols="106"></textarea><br />
    C.V: <input type="file" name="cv" id=""> <br>

    <input type="submit" value="Submit" class="upload" name="sub"/>
    </form>





        
        

</body>
</html>