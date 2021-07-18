<?php
session_start();
include("connection/connection.php");

error_reporting(0);


if(isset($_SESSION['trackid']))
{
  $companyid=$_SESSION['trackid'];
} 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">

</head>

<body>


<div style="height:5px; background:#1790A2;"></div>


    


    <section  class="container py-2 mb-4">
        <div class="row" style="min-height:30px;">
            <div class="col-lg-12" style="min-height:400px;">
            <h2>Apply info</h2>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Job Title</th>
                        <th>Applicant Name</th>
                        <th>Applicant Email</th>
                        
                        <th>Applied Date</th>
                        <th>Resume</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Regect</th>
                    </tr>
                </thead>
            
            

            <?php
            $tt=$_SESSION["empuserid"];
                $count=0;
                //$sql="SELECT * FROM apply";
                
    $sql="SELECT a.id,a.name,a.email,a.resume,a.jobseeker_id,a.jobpost_id,a.status,a.apply_date FROM apply a CROSS JOIN jobpost j where a.jobpost_id=j.id AND j.company_id='$companyid'";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    
                    while($row = mysqli_fetch_assoc($result)) { 
                        $ID=$row["id"];
                        $n=$row["name"];
                        $e=$row["email"];
                        
                        $ru=$row["resume"];
                        $sk=$row["jobseeker_id"];
                        $pid=$row["jobpost_id"];
                        $stus=$row["status"];
                        $tm=$row["apply_date"];
                        $count++;
                        if($stus=="pending")
                        {

                            $aplink="";
                            $Btn="btn btn-success";
                            $Btn1="btn btn-danger";

                        }
                        else 
                        {
                            $aplink="pointer-events: none;
                            cursor: default;";
                            $Btn="btn btn-secondary";
                            $Btn1="btn btn-secondary";
                        }
                        if($stus=="Accepted")
                            {
                                $status="text-success";
                            }
                        else if($stus=="Rejected")
                        {
                            $status="text-danger";
                        }
                        else {
                            $status="text-warning";
                        }
                    
                        
            ?>
            <tbody>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php 

                        $sq="SELECT * FROM jobpost WHERE id='$pid'";
                        $r = mysqli_query($conn, $sq);

                        if (mysqli_num_rows($r) > 0) {
                            
                            while($ro = mysqli_fetch_assoc($r)) { 
                                $posttitle=$ro["companyName"];
                            }
                            echo $posttitle;
                        }
                        ?></td>
                        <td><?php echo $n;?></td>
                        <td><?php echo $e;?></td>
                        
                        <td><?php echo $tm;?></td>
                        <td><a href="upload/<?php echo $ru;?>" class ="btn btn-info"> Download</a></td>
                        <td><p class="font-weight-bold  <?php echo $status;?> "><?php echo $stus;?></p></td>
                        <td><a href="approve.php?id=<?php echo $ID;?>" class="<?php echo $Btn?>" style='<?php echo $aplink;?>'>Approve</a></td>
                        <td><a href="reject.php?id=<?php echo $ID;?>" class="<?php echo $Btn1?>" style='<?php echo $aplink;?>'>Reject</a></td>
                        
                    </tr>
            </tbody>
       <?php } mysqli_close($conn);}?>
            </table>
            
            </div>
        </div>
    </section>



    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>