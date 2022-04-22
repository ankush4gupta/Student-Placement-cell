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
          <th>Name</th>
          <th>Course</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>view</th>
          <th>Delete</th>
         

          
          
        </tr>
        <?php  
      
    
    $q="SELECT * FROM  student ";
    $result = mysqli_query($db,$q);
    
    while ($r1 = mysqli_fetch_array($result)) {
        # code...
    

?>
        <tr> 
          <td><?=$r1['s_number'];?></td>
          <td><?=$r1['fname'];?></td>
          <td><?=$r1['gstream'];?></td>

          <td><?=$r1['email'];?></td>
          <td><?=$r1['mobile'];?></td>
         
          <td><a href="view_student.php?email=<?php echo $r1['email'];?>">view more</a></td>
          <td><a href="delete_student.php?email=<?php echo $r1['email'];?>">Delete</a></td>
         
          
        </tr>
        
        <?php } ?>
      </table>



  </form>

</body>
</html>