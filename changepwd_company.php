

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
</head>
<style>
   body{
      background-image: url("bgimg.jpg");
      background-size: cover;
    }

.grid-container {
      display: grid;
      height: 100%;
      align-content: start;
      grid-template-columns: auto auto auto;
      grid-gap: 10px;
      margin: 100px 250px 100px 0px;
      
      padding: 0px;
    
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




.h { background-color: #4CAF50;
color: white;
border: none;
font-size: 15px;
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

   

    <div class="grid-container">
        <div > Change Password <br>

            <form action="" method="post">
           
            <input type="email" name="email" id="" placeholder="email"> <br>
            <input type="password" name="password" id="" placeholder="new password"> <br>
            <input class="h" type="submit" value="submit" name="sub"><br>
            
        </form>
        </div>



    </div>
    
</body>
</html>
<?php
include('connection.php');
session_start();

if (isset($_POST['sub'])) {
  
  $password = $_POST['password'];
  $email = $_POST['email'];

  $update = "Update company set password='$password' where email = '$email' ";
  $result = mysqli_query($db,$update);
  if ($result) {
    echo "<script>alert('Password changed successfully')</script>" ; 
  
    
  }
  else{
    echo "Try again.";
  }

}


?>