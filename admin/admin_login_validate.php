
<?php
session_start();
include("../connection/connection.php");

error_reporting(0);
?>

<?php

if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['pass'];

  
  $sql="select * 
  from admin as a
  where a.name = '$username' AND a.password='$password'; ";

  $res=mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($res);

  //$check_pass= password_verify($password, $row['password']);
 
  if(!empty($row)){
    echo "<script type='text/javascript'>alert('Login successfull!')</script>";
     $_SESSION['id']=$row['id'];
   // echo "<script> window.location='adminF.php'</script>";
   header('location:adminF.php');
  }
  else{
    echo "<script type='text/javascript'>alert('Login unsuccessfull! Wrong Username or Password')</script>";
    //echo "<script> window.location='adminLoginform.php'</script>";
    header('location:admin_login.php');
    
  }      
}
?>