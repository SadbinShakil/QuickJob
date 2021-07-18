
<?php

include("../connection/connection.php");

error_reporting(0);
?>



<!DOCTYPE html>
<html>
<head>
  <title>View Job Post</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style type="text/css">
    table , th, td{
      border: 1px solid black;
    }
    .viewmarks{
      background: url('assets/img/bgs.jpg')no-repeat center center fixed ;
      -moz-background-size: cover;
      -webkik-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .a{
      margin-left: 100px;
      margin-top: 100px;
    }
  </style>


</head>
<body class="viewmarks">

  <?php
  include('../generalF.php');

  ?>


    <h1 align="center">Job Post</h1>

<div class="a">

    <div class="container">
      <div class="jumbotron">

        <div class="card">
          <h5 class="card-header"></h5>
          <div class="card-body">
            <h5 class="card-title">Job Post</h5>

            <table class="table table-dark table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">Job Posted Date</th>
                  <th scope="col">Last Date of Apply</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Job Title</th>
                
                
                  <th  scope="col">Description</th>
                  <th  scope="col">Job Circular</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <?php
                        $jobloc= $_GET["category"];

                    $query= "select * from jobpost as j where j.companyLoc='$jobloc'
                     ";
                    $res= mysqli_query($conn,$query);

                    if(!$res)
                    {
                       echo "<script type='text/javascript'>alert('Query Failed')</script>";
                    }

                    else {

                      while($row = mysqli_fetch_assoc($res))
                        {  ?>


                          <tr>
                            <td><?php echo $row['postDate'];?></td>
                            <td><?php echo $row['expireDate'];?></td>
                            <td><?php echo $row['companyName'];?></td>
                            <td><?php echo $row['jobTitle'];?></td>

                            
                           
                            <td><?php echo $row['description'];?></td>

                            <td>
              <a href="../jobseeker/Download_job_circular.php? file_id= <?php echo $row['id']?> "> Download </a>
                            </td>

                            <td>
                          <input type="button" name="" value="Apply Now">
                            </td>


                          </tr>


          <?php
        }

      }
    
    ?>

  </tr>
</tbody>

</table>
</div>
</div>
</body>
</html>













