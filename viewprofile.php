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
    <title>view profile</title>
</head>
<style>
    
    .one{
        float: left;
        border: solid;
        height: 510px;
        width: 475px;
        background-color: lightblue;
        margin: 5px 0px 5px 5px;
    }
    .two{
        float: right;
        border: solid;
        height: 510px;
        width: 474px;
        background-color: lightblue;
        margin: 5px 5px 5px 0px;

    }
    .photo{
        float: right;
        height: 130px;
        width: 120px;
        border: none;
        background-color: lightcoral;
        margin: 30px 170px 0px 0px ;
    }
    .inside{
        float: left;
        display: inline-block;
        font-size: 18px;
        margin: 10px;
        padding: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>

<?php 
          $email = $_SESSION["email"];
    $q ="SELECT * from student where email = '$email' ";
    $result = mysqli_query($db, $q);
    
    while ($r1 = mysqli_fetch_assoc($result)) {
        # code...
    

?>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="one">
            
                    <div class="inside">
                  <label>  Name: </label>
                  <span><?=$r1['fname'];?></span>
                  <span><?=$r1['lname'];?></span>
                  <br> <br>
                
                   <label> Dob: </label>
                   <span><?=$r1['dob'];?></span>
                   <br> <br>
                
                   <label> Phone number :</label>
                   <span><?=$r1['mobile'];?></span>
                   <br> <br>
               
                   <label > Email: </label>
                    <span><?=$r1['email'];?></span>
                    <br> <br>
                
                  <label>  Stream: </label>
                    <span><?=$r1['gstream'];?></span>
                    <br> <br> 

                  <label>  Bio: </label>
                    <span><?=$r1['bio'];?></span>
                    <br>
                    <hr>
                    <hr>
                </div>    
                
            
            <div class="photo">
            <img src="images/<?=$r1['photo'];?>" style="width:120px;height:130px;">
            
           

            </div>
            
        </div>
        <div class="two">
        <img alt ="ttt"src="images/<?=$r1['cv']; ?>" style="width:100%;height:510px;">
        

        </div>
        <?php 
     }
  ?>

    </form>
</body>
</html>