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
    <title>Notification</title>
</head>
<style>
 input {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 }
  #textarea{
    width: 760px;
    height: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
font-size: 15px;
  }

.edit{
  font-size: 20px;
  text-decoration: none;
  margin-left: 20px;
  border-radius:  4px;
  border : none;
  padding: 10px;
  background-color: #008CBA;
  color: white;
}
.edit:hover{
  background-color: green;
}

</style>
<body>
<h2>Notification</h2>

<?php  
    $email = $_SESSION["email"];
    $q="SELECT * FROM college_notice where email = '$email' ";
    $result = mysqli_query($db,$q);
    
    while ($data = mysqli_fetch_array($result)) {
        # code...
    

?>


Subject:
<input type="text" name="subject"value="<?php echo $data['subject']; ?>"  id="" placeholder="Subject" readonly > 
Date:
<input type="text" name="date" id="" placeholder="date"  value="<?php echo $data['date']; ?>" readonly > <br>
Email:
<input type="email" name="email" id="" placeholder="email" value="<?php echo $data['email']; ?>" readonly  > <br>
Notice: 
<br>
<textarea name="notice" id="textarea" cols="30" rows="10" readonly><?php echo $data['notice']; ?></textarea>
<!-- <input type="text" name="notice" id="textarea"  value=" > <br> <br> -->

<a href="edit_collge_noti.php?email=<?php echo $data['email'];?>" class = "edit">Edit</a>


<?php }?>

</body>


