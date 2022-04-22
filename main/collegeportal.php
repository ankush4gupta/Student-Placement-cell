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
    <title>College Portal</title>
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
    margin-left: 3px;
    
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
  width: 950px;
}
a:hover{
  background-color: darkgray;
}

</style>
<body>
<ul>
        <li style=" display: block; color: white; text-align: center; padding: 14px 16px; font-size:  18px;"><b>SPC</b></li>
        <li style=" display: block; color: white; text-align: center; padding: 14px 16px; margin-left: 500px; font-size: 18 px;">
          <b>ADMIN</b>
        </li>
        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
      </ul> 
      <form action="" method="post">
                 <div style="height: max-content;">
        <div class="one">
          <ul >
            <li class="non" >
              <a href="college_std_list.php" target="iframe_a">View Students</a><br>
            </li>
            <li class="non">
              <a href="college_noti.php" target="iframe_a">College Notifications</a><br>
            </li>
            <li class="non">
              <a href="notification.php" target="iframe_a">Company Notifications</a><br>
            </li>
            <li class="non">
              <a href="companylist.php" target="iframe_a">View Comapny List</a><br>
            </li>
            <li class="non">
              <a href="jobholder.php" target="iframe_a">View Job Holder Students</a> <br>
            </li>
            <li class="non">
              <a href="change_collegepwd.php" target="iframe_a">Change Password</a><br>
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