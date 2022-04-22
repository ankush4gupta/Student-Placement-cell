<?php include('connection.php');
session_start();
       


?>
<? php
  if (isset($_POST['sub']))
{
    $edit_st_id= $_GET['email'];
    $fname = $_POST['fname'];
    $lname = $db,$_POST['lname'];
    $email = $_POST['email'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $city =$_POST['city'];
    $nation = $_POST['nation'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
   // $photo = $_POST['photo'];
   
    $state = $_POST['state'];
    $hinstitute = $_POST['hinstitute'];
    $hstream = $_POST['hstream'];
    $hyear = $_POST['hyear'];
    $hgrade = $_POST['hgrade'];

    $iinstitute = $_POST['iinstitute'];
    $iyear = $_POST['iyear'];
    $istream = $_POST['istream'];
    $igrade = $_POST['igrade'];

    $ginstitute = $_POST['ginstitute'];
    $gpassyear = $_POST['gyear'];
    $gstream = $_POST['gstream'];
    $ggrade = $_POST['ggrade'];

   // $cv = $_POST['cv'];
    

   
       
  

            $sql = "update student set fname = '$fname', lname = '$lname', email ='$email', father = '$father', dob = '$dob', gender = '$gender', mobile = '$mobile', city = '$city',  state = '$state', mother ='$mother', nation  = '$nation',  address  = '$address', 
            hinstitute = '$hinstitute',hyear = '$hyear',hstream='$hstream' ,hgrade='$hgrade',iinstitute = '$iinstitute',iyear = '$iyear',istream='$istream' ,igrade='$igrade', ginstitute = '$ginstitute',gyear = '$gyear',gstream='$gstream' ,ugrade='$ggrade' where email ='$edit_std_id'" ;

            $run = mysqli_query($db,$sql);
            if ($run) {
              // echo "<script>window.open('edit_student.php?update_success= Student data updated successfully','_Self'</script>";
             echo "success";
            }
            else {
                //echo  "<script>window.open('edit_student.php?update_error= Unable to  update data . Please try again','_Self'</script>";
               

          
        }
    

    
    
         
?>