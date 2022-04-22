
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




/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 30px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
  margin-top: 0px;
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

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
        <li><a  href="inbox_company.php" target="iframe_b">Inbox</a></li>
        <li><a href="sent_company.php" target="iframe_b" >Sent</a></li>
        <li><a href="compose_company.php" class="active" id="myBtn" target="iframe_b">Compose</a></li>
    </ul>

   
    
  




<div id="frame">

  <iframe name="iframe_b" height="100%" width="100%" ></iframe>


 </div>
</body>
</html>