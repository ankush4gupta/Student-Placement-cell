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
    <title>Sent</title>
</head>
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}



</style>
<body>


  <form action="" method="post">
    <table>
  
        <tr>
          <th>S.No</th>
          <th>Title</th>
         
          <th>Email</th>
          <th>Message</th>
          <th>Date & Time</th>
         
          

          
          
        </tr>
        <?php  
        $n = $_SESSION["email"];
    
        $records = mysqli_query($db,"SELECT * FROM mail where email = '$n' "); // fetch data from database 
        

        while($r1 = mysqli_fetch_array($records))
        {
    

?>
        <tr> 
          <td><?=$r1['s_number'];?></td>
          <td><?=$r1['subject'];?></td>
          
          <td><?=$r1['user_mail'];?></td>
          <td><?=$r1['message'];?></td>
          <td><?=$r1['date_time'];?></td>
         
          
        </tr>
        
        <?php } ?>
      </table>

    
       
  </form>

</body>
</html>