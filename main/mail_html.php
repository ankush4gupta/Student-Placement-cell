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
  width: 100%;
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
<body> <div>
    <ul>
      
        <li><a  href="inbox.php" target="iframe_b">Inbox</a></li>
        <li><a href="sent.php" target="iframe_b" >Sent</a></li>
        <li><a href="compose.php" class="active" id="myBtn" target="iframe_b">Compose</a></li>
    </ul>

        <!-- The Modal -->
    
     


<!-- Modal content -->


<div id="frame">

  <iframe name="iframe_b" height="100%" width="100%" >
  
 
  </iframe>


 </div>
        
        

</body>
</html>