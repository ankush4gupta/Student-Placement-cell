<?php
include('connection.php');
session_start();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title" id="">
    <input type="file" name="file" id=""> <br>
    <input type="submit" value="submit" name="sumit">

</form>
</body>
</html>
<?php 

if(isset($_POST['sumit']))
{
    $title = $_POST['title'];
    $pname = $_FILES["file"]["name"];

    $tname = $_FILES["file"]["tmp_name"];

    $uploads_dir = 'images';
    move_uploaded_file($tname,$uploads_dir.'/'.$pname);
    echo "success full";

    
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";

    if(mysqli_query($db,$sql)){
        echo "success full";
    }


}
?>