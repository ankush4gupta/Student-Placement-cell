
<?php
 include('connection.php');
 session_start();
  if(isset($_POST['sub']))
  {
    $email = $_POST["email"];
    $password =  $_POST["password"];
    $get_data = "SELECT * FROM registration WHERE email = '$email'";
    $result = mysqli_query($db,$get_data);
    if(mysqli_num_rows($result)){
        $un = mysqli_fetch_array($result);
        if($un['password'] == $password){
            $_SESSION["reg_id"] = $un['s_number'];
            $_SESSION["name"] = $un['name'];
            $_SESSION["email"] = $un['email'];
            header("Location: collegeportal.php");
        }else{
            echo "<script> alert('Wrong User') </script>";
        }
    }
}
?>
