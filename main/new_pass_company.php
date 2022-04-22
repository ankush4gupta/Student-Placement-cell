

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
</head>
<style>

.grid-container {
      display: grid;
      height: 100%;
      align-content: start;
      grid-template-columns: auto auto auto;
      grid-gap: 10px;
      margin-top: 100px;
      padding: 10px;
    
    }
    
    div a{
    font-size:10px}
    
    .grid-container > div {
        border-radius: 15px 50px;
        border-style: solid;
        width: 380px;
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 30px 0;
      margin-left: 400px;
      font-size: 20px;
    }


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


.h { background-color: #4CAF50;
color: white;
border: none;
font-size: 15px;
}
.l{
    text-decoration: none;
    font-size: 14px;
    color: black;
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

</style>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li style=" display: block; color: white; text-align: center; padding: 14px 16px; margin-left: 300px; font-size: 18 px;"
        >New Password</li>
        
      </ul>

    <div class="grid-container">
        <div > New Password <br>

            <form action="" method="post">
           
            <input type="password" name="password" id="" placeholder="password"> <br>
            <input class="h" type="submit" value="submit" name="sub"><br>
            <a href= "student.php" class="l">Termiate Process</a>
        </form>
        </div>



    </div>
    
</body>
</html>
<?php
include('connection.php');
session_start();
$email = $_SESSION['email'];
if (isset($_POST['sub'])) {
  
  $password = $_POST['password'];

  $update = "Update company set password='$password' where email = '$email' ";
  $result = mysqli_query($db,$update);
  if ($result) {
    echo "New password generate suceesfully";
    header('Location:company.php');
    # code...
  }
  else{
    echo "Try again.";
  }

}


?>