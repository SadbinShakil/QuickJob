<?php
session_start();
include("connection/connection.php");

error_reporting(0);
?>

<?php
$poid=$_GET["id"];
if(isset($_SESSION['jid']))
{
  $jobseekerid=$_SESSION['jid'];
} 


if(isset($_POST["Submit"]))
    {   
        $fname=$_POST["name"];
        $mail=$_POST["email"];
        
        $skill=$_POST["skills"];

        $resume=$_FILES["pdf"]["name"] ;
        $Target="upload/".basename($_FILES["pdf"]["name"]);
        
        $skid=$_SESSION["seekuserid"];                                            ////////////////////////////////////////////////////////////////////////
        $status='pending';

        $time=date('Y/m/d');
		
           
        if(empty($fname)){
            $_SESSION["Error"]="Full Name Requird";              //17
            header("Location:apply.php?id=".$poid);
        }
        elseif(empty($mail)){
            $_SESSION["Error"]="Email Address Required";              //17
            header("Location:apply.php?id=".$poid);
        }
        elseif(empty($skill)){
            $_SESSION["Error"]="Provide Skkills releted Information";              //17
            header("Location:apply.php?id=".$poid);
        }


        else{

            $sql="INSERT INTO apply (name,email,resume,jobseeker_id,jobpost_id,status,apply_date) 
            VALUES ('$fname','$mail','$resume','$jobseekerid','$poid','$status','$time') ";
            if (mysqli_query($conn, $sql)) {
                move_uploaded_file($_FILES["pdf"]["tmp_name"],$Target);  
                echo "<script type='text/javascript'>alert('Request has send successfully!')</script>";
                //reload("Job_Post.php");                          /////////////////////////////////////////////////
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
	
	
	
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
	<title>Job Categories </title>

</head>
<body>

    

	
	<section class ="container py-2 mb-4">
		<div class="row" >
			<div class="offset-lg-1 col-lg-10" >

				<form class="" action="apply.php?id=<?php echo $poid;?>" method="post" enctype="multipart/form-data">
					<div class="card bg-secondary text-light">
						<div class="card-header">
							<h1> Apply For Job</h1>
						</div>
						<div class="card-body bg-dark">
							<div class="form-group">
								<label for="title"> <span style="color:rgb(0, 153, 153) ">Name</span></label>
								<input class ="form-control" type="text" name="name" id="title" placeholder="Full Name" value=""> 
                            </div>

                            <div class="form-group">
								<label for="email"> <span style="color:rgb(0, 153, 153) ">Email Address</span></label>
								<input class ="form-control" type="text" name="email" id="email" placeholder="Email Address" value=""> 
                            </div>
                            <div class="form-group">
								<label for="skills"> <span style="color:rgb(0, 153, 153) ">Skills</span></label>
								<input class ="form-control" type="text" name="skills" id="address" placeholder="Skills" value=""> 
                            </div>
                            
                      
                            <div class="form-group">
                                <label for="pdfSelect"> <span style="FieldInfo; color:rgb(0, 153, 153);">Resume</span></label>
                                    <div class="custom-file">
                                        <input class ="custom-file-input" type="File" name="pdf" id="pdfSelect" > 
                                        <label for="pdfSelect" class="custom-file-label"> </label>
                                    </div>
                            </div>


                            
                            <div class="row">
								<div class="col-lg-12">
									<button type="Submit" name="Submit" class="btn btn-success btn-block">
										Apply
									</button>
									
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	
	</section>
    
    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>