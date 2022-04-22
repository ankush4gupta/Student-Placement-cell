<?php  
include('connection.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Portal</title>
</head>
<style>
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
.non {
  float: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover{
  background-color: green;
}

.active {
  background-color:#008CBA;
}
.one {
    float: left;
    height: 545px;
    width: max-content;
  
    margin-top: 5px;
    margin-bottom: 5px;
    padding-left:6PX;
    padding-right: 6px;
    margin-left: 5px;
    
    list-style-type: none;
  
  overflow: hidden;
  background-color: #333;
}
.one a {
    font-size: 20px;
    margin: 10px;
    color: white;
    border: solid;
    border-color: black ;
   
   background-color: #333;
   

    display: block;
 
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}
.one :hover{
    background-color: black;
    border-color:white ;

}
.two{
  float: right;
  height: 545px;
  margin: 5px;
  
  background-color: lightblue;
  width: 985px;
}
a:hover{
  background-color: darkgray;
}

</style>
<body>
<ul> <li><a href="index.php">SPC</a></li>
        <li><a href="college_notice.php">Notification</a></li>
        <li style=" display: block; color: white; text-align: center; padding: 14px 16px; margin-left: 300px; font-size: 18 px;"
        ><b>  <b><?php echo $_SESSION["name"]; ?></b> 
        </li>
        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
      </ul> 
      <form action="" method="post">   
         <div style="height: max-content;">
        <div class="one">
          <ul >
            <li class="non" >
              <a href="addnotic.php" target="iframe_a">Add Notifications</a><br>
            </li>
            <li class="non" >
              <a href="uploadnoti.php" target="iframe_a"> Notifications</a><br>
            </li>
           
            <li class="non">
              <a href="mail_company_html.php" target="iframe_a">Mail</a><br>
            </li>
            <li class="non">
              <a href="selected_std_list.php" target="iframe_a">Selected students list</a><br>
            </li>
            <li class="non">
              <a href="changepwd_company.php" target="iframe_a">Change Password</a><br>
            </li>
          </ul>
 </ul>   
        </div>
       <div class="two">

        <iframe name="iframe_a" height="100%" width="100%" ></iframe>
       </div>
      </div>
      <div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">  ©copyright</div>
      </form>  
</body>
</html>