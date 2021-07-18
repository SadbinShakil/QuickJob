<?php
session_start();

?>


<?php
include("../connection/connection.php");

error_reporting(0);
?>

<?php

if(isset($_POST['submit2']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  
  $sql="select * 
  from jobseeker as c
  where c.email = '$username' AND c.password='$password'; ";

  $res=mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($res);

  //$check_pass= password_verify($password, $row['password']);

  if($row){
    echo "<script type='text/javascript'>alert('Login successfull!')</script>";
      $_SESSION['jid']=$row['id'];
    //echo "<script> window.location='adminF.php'</script>";
    header('location:jobseekerF.php');
  }
  else{
    echo "<script type='text/javascript'>alert('Login unsuccessfull! Wrong Username or Password')</script>";
    //echo "<script> window.location='adminLoginform.php'</script>";
    header('location:jobseeker_login.php');
    
  }      
}
?>