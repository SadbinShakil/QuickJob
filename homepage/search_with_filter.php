

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
			background: url('../homepage/assets/img/bgs.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		body{
			background-image: url('bg3.jpg');
		}
		.a{
			margin-left: 300px;
		}
		.ab{
			margin-left: 0px;
		}



    

.price-slider {
  width: 300px;
  margin: auto;
  text-align: center;
  position: relative;
  height: 6em;
}
.price-slider svg,
.price-slider input[type=range] {
  position: absolute;
  left: 0;
  bottom: 0;
}
input[type=number] {
  border: 1px solid #ddd;
  text-align: center;
  font-size: 1.6em;
  -moz-appearance: textfield;
}
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
input[type=number]:invalid,
input[type=number]:out-of-range {
  border: 2px solid #e60023;
}
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #1da1f2;
}
input[type=range]:focus::-ms-fill-lower {
  background: #1da1f2;
}
input[type=range]:focus::-ms-fill-upper {
  background: #1da1f2;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: #1da1f2;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type=range]::-webkit-slider-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #1da1f2;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #a1d0ff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -7px;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: #1da1f2;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type=range]::-moz-range-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #1da1f2;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #a1d0ff;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower,
input[type=range]::-ms-fill-upper {
  background: #1da1f2;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type=range]::-ms-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #1da1f2;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #a1d0ff;
  cursor: pointer;
}




	</style>


</head>
<body class="viewmarks">
	<!--<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->
	<?php
	include('../generalF.php');

	?>
	<div class="a">

	<!-- ======= Search a job Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Search For a Job</h2>
          <p>Set Filters</p>
        </div>

        <form method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="cname" class="form-control" placeholder="Company Name" data-rule="minlen:4" >
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="location"  placeholder="Location" data-rule="Location">
              <div class="validate"></div>
            </div>
           <!-- <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="salary"  placeholder="Salary Range" data-rule="minlen:4">
              <div class="validate"></div>
            </div>-->
        <div class="price-slider"><b>Salary Range</b> <span>
            <input type="number" name="min" min="0" max="120000"/>
            <input type="number" min="0" name="max" max="120000"/></span>
          <input min="0" max="120000" step="500" type="range"/>
          <input min="0" max="120000" step="500" type="range"/>
          <svg width="100%" height="24">
            <line x1="4" y1="0" x2="300" y2="0" stroke="#212121" stroke-width="12" stroke-dasharray="1 28"></line>
          </svg>
        </div>





            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="post" class="form-control" placeholder="Post" data-rule="minlen:4">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="mindeg" placeholder="Minimum Degree Required" data-rule="minlen:4">
              <div class="validate"></div>
            </div>
            
          
          </div>
          <div class="text-center"><button name="submit" value="submit" type="submit">Search a Job</button>
          </div>
        </form>
      </div>


 
    </section><!-- End Book A Table Section -->

		<br>
		

		<br>
		<br>

<div class="ab">


		<h1 align="center">Job Post</h1>



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
									<th scope="col">Salary</th>
									<th  scope="col">File</th>
									<th  scope="col">Description</th>
									<th  scope="col">Job Circular</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<?php 

									if(isset($_POST['submit']))
									{
										$cname=$_POST['cname'];

										$location=$_POST['location'];

										$min=$_POST['min'];
										$max=$_POST['max'];

										$post=$_POST['post'];

										$mindeg=$_POST['mindeg'];

										//echo "string".$min.$max.$cname.$location.$post.$mindeg;


										$query= "select * from jobpost as j
										where j.companyName='$cname'
										AND j.companyLoc='$location'
										AND j.jobTitle='$post'
										AND j.mindeg='$mindeg' 
										AND j.salary BETWEEN '$min' AND '$max' ";

										$res= mysqli_query($conn,$query);
										//$row = mysqli_fetch_assoc($res);
										//echo $row[0];
										//echo "string2".$query;
										
										

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

														<td><?php echo $row['salary'];?></td>
														<td><?php echo $row['filename'];?></td>
														<td><?php echo $row['description'];?></td>

														<td>
							<a href="Download_job_circular.php? file_id= <?php echo $row['id']?> "> Download </a>
														</td>
														<td>
													<input type="button" name="" value="Apply Now">
														</td>


													</tr>


					<?php
				}

			}
		}




		?>




	</tr>
</tbody>

</table>
</div>
</div>
</div>
</body>
</html>




<script type="text/javascript">

(function() {

  var parent = document.querySelector(".price-slider");
  if(!parent) return;

  var
    rangeS = parent.querySelectorAll("input[type=range]"),
    numberS = parent.querySelectorAll("input[type=number]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
            slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
        var number1 = parseFloat(numberS[0].value),
        number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();

</script>