
<?php
session_start();
include("../connection/connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Post a Job</title>


  <style type="text/css">
    .a{
      margin-left: 500px;
    }
    .card{
      margin-left: 250px;
    }
  </style>

  <!--bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  
  
</head>
<body>
 <!-- <header>
  <div class="headerdiv">
    <div class="logodiv">
      <img src="mainlogo.gif">
    </div>
  
</div>
</header>-->
<?php
include('companyF.php');
?>

<div class="aa">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <table align="center">
	<!--<form method="POST" enctype="multipart/form-data">
	Session:
    <input type="number" name="session"><br>

    Classid:
    <input type="" name="classid"><br>

    Select File to Upload:
    <input type="file" name="file"><br>
  <br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
</form>-->

<br>
<br>
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong style="color: black;">Post a Job</strong>
  </h5>

  
  <div class="card-body px-lg-5 pt-0">

    
    <form class="text-center" style="color: black;" method="POST" enctype="multipart/form-data">

      <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <label for="">Title of The Job</label>
            <input type="text" id="" class="form-control" name="jobTitle">
            
          </div>
        </div>
      </div>
<br>
      <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <!--Category Section-->
      <label for="Category">Select Job Category</label>
      <select name="Category" id="Category">
      <?php 
        $category="SELECT title FROM job_category";
        $result = mysqli_query($conn, $category);

        if (mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) { ?>
                <option> <?php echo $row["title"];?> </option> 
            <?php }
        } else {
            echo "0 results";
        }
        ?>
      </select><!--/ -->
            
          </div>
        </div>
      </div>

        

       <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <label for="">Company Location</label>
            <input type="text" id="" class="form-control" name="companyLoc">
            
          </div>
        </div>
      </div>
 
        <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <label for="">Expire date</label>
            <input type="date" id="" class="form-control" name="ed">
            
          </div>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <!--Division Section-->
      <label for="divisions">Select Division</label>
      <select name="divisions" id="divisions">

        <?php 
        $division="SELECT division_name FROM division";
        $result = mysqli_query($conn, $division);

        if (mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) { ?>
                <option> <?php echo $row["division_name"];?> </option> 
            <?php }
        } else {
            echo "0 results";
        }
        ?>

      </select><!--/ Division Section-->
            
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <label for="">Description of the jobs</label>
            <textarea name="des" >
              
            </textarea>
            
          </div>
        </div>
      </div>
    
<div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <label for="">Salary</label>
            <input type="number" id="" class="form-control" name="salary">
            
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <label for="">Minimum Degree Required</label>
            <input type="text" id="" class="form-control" name="mindeg">
            
          </div>
        </div>
      </div>
     
     <div class="md-form mt-0">
      <label for="">Select a File to Upload</label>
      <input type="file" id="" class="form-control" name="file">
      
    </div>


    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>

    

  </form>

</div>
</div>
</div>


</body>
</html>

<?php
if (isset($_POST['submit'])){

	$filename=$_FILES['file']['name']; //holding the original name of the file

	$jtitle=$_POST['jobTitle'];
  $cname=$_SESSION['username'];
  $ed=$_POST['ed'];
  $cloc=$_POST['companyLoc'];
  $desc=$_POST['des'];
  $cat=$_POST['Category'];
  $div=$_POST['divisions'];
   $salary=$_POST['salary'];
   $mindeg=$_POST['mindeg'];
   $cid=$_SESSION['trackid'];



   $jc_id="select id
   from job_category
   where title='$cat'";
 
   $res=mysqli_query($conn,$jc_id);
   $row = mysqli_fetch_assoc($res);
   if($row){
    
      $jcid=$row['id'];
  }


   $d_id="select id
   from division
   where division_name='$div'";
 
   $r=mysqli_query($conn,$d_id);
   $rows = mysqli_fetch_assoc($r);
   if($rows){
    
      $did=$rows['id'];
  }

	$destination= 'files/' . $filename;
	$extension= pathinfo($filename,PATHINFO_EXTENSION);
	$file= $_FILES['file']['tmp_name'];
	$size= $_FILES['file']['size'];


  $date = date('Y/m/d');


  if(!in_array($extension,['zip','pdf','png','docx','jpg','jpeg','xls'])){
    //echo "File Extension is not Supported";
    echo "<script type='text/javascript'>alert('File Extension is not Supported')</script>";
  }
  elseif ($size>1000000) {
    //echo "File is too learge";
    echo "<script type='text/javascript'>alert('File is too learge')</script>";
  } 
  else{ 
    if(move_uploaded_file($file, $destination)){
     $query= "INSERT INTO jobpost(jobTitle,companyName,postDate,expireDate,companyLoc,size,filename,description,company_id,divition_id,category_id,salary,mindeg) VALUES('$jtitle','$cname','$date','$ed','$cloc','$size','$filename','$desc','$cid','$did','$jcid','$salary','$mindeg')";

     $data=mysqli_query($conn,$query);
   
     if($data){
      
       echo "<script type='text/javascript'>alert('Job Posted successfully!')</script>";
     }
     else{
       echo "<script type='text/javascript'>alert('$did,$jcid')</script>";
       //echo "<script type='text/javascript'>alert('Job Post unsuccessfull!')</script>";
     }
   }
   else{
    echo "Bal";
   }
 }

}
?>


<?php

if (isset($_GET['file_id'])) {

 $id=$_GET['file_id'];

 $sql= "SELECT * FROM jobpost WHERE id='$id' ";

 $res=mysqli_query($conn,$sql);

 $file= mysqli_fetch_assoc($res);

 $filepath= 'files/' . $file['filename'];

 

 if(file_exists($filepath)){
  header('Content-Type: Application/octet-stream');
  header('Content-Description: File Transfer');
  header('Content-Disposition: attachment; filename=' . basename($filepath));
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length:' . filesize('files/'.$file['filename']));

  readfile('/files'.$file['filename']);

}

}

?>


