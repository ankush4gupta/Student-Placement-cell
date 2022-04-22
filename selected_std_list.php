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


  <form action="" method="post">
    <table>
    <?php 
    $c = $_SESSION['name'];
       echo  "<h1>$c</h1>";
         ?>
        <tr>
          <th>S.No</th>
          <th>Student Name</th>
         
          <th>Post</th>
          <th>Stream</th>
          <th>Year Of passing</th>
          <th>Edit</th>
          <th>Delete</th>
          

          
          
        </tr>
        <?php  
        $name = $_SESSION["name"];
    
        $records = mysqli_query($db,"select * from selected where companyname = '$name' "); // fetch data from database

        while($r1 = mysqli_fetch_array($records))
        {
    

?>
        <tr> 
          <td><?=$r1['s_number'];?></td>
          <td><?=$r1['name'];?></td>
          
          <td><?=$r1['post'];?></td>
          <td><?=$r1['stream'];?></td>
          <td><?=$r1['pyear'];?></td>
          <td><a href="edit_selected_std.php?s_number=<?php echo $r1['s_number']; ?>">Edit</a></td>
          <td><a href="delete_list.php?name=<?php echo $r1['name']; ?>">Delete</a></td>
          
        </tr>
        
        <?php } ?>
      </table>
      <br>
      <br>

      <td><a href="add_selected_std.php" class = "edit">Add students</a></td>
       
  </form>

</body>
</html>