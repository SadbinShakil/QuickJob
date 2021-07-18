
<?php
include("connection/connection.php");

error_reporting(0);
?>




<?php

if (isset($_GET['file_id'])) {

 $id=$_GET['file_id'];

 $sql= "SELECT * FROM jobpost WHERE id='$id' ";

 $res=mysqli_query($conn,$sql);

 $file= mysqli_fetch_assoc($res);

 $filepath= '../company/files/' . $file['filename'];

 //echo $file['noticetitle'];
 

 if(file_exists($filepath)){
  header('Content-Type: Application/octet-stream');
  header('Content-Description: File Transfer');
  header('Content-Disposition: attachment; filename=' . basename($filepath));
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length:' . filesize('files/'.$file['filename']));

  readfile('../company/files'.$file['filename']);

}

}

?>


