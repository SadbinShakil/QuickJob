<?php

include("../connection/connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quick Job</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style type="text/css">
    


.dropdown-item {
  display: none;
  position: absolute;
  background-color: black;
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

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +8801857297599
       <!-- <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span> -->

 <!--For Date and time-->
 <marquee behavior="scroll" bgcolor="#cda45e" loop="-1" width="30%">
   <i>
      <font color="blue">
        Today's date is : 
        <strong>
         <span id="time"></span>
        </strong>           
      </font>
   </i>
</marquee>

<script type="text/javascript">
  var today = new Date();
document.getElementById('time').innerHTML=today;
</script>



      </div>
      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Quick Job</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Live Jobs</a></li>
          <li><a href="#specials">Govt. Jobs</a></li>
          <li><a href="search_with_filter.php">Search Job</a></li>
          <li><a href="#contact">Contact</a></li>

          <li class=" text-center">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sign in/Up
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="../admin/admin_login.php" target="_blank">Admin</a>
              <a class="dropdown-item" href="../jobseeker/jobseeker_login.php" target="_blank">Jobseeker</a>
              <a class="dropdown-item" href="../company/company_login.php">Company</a>
            </div>
          </div>
          </li>

         <!-- <li class="book-a-table text-center"><a href="../jobseeker/jobseeker_login.php">Sign in or Create Account</a></li>-->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="btns">
            <a href="#" class="btn-menu animated fadeInUp scrollto">Total Registered JobSeekers(<?php 
              $query="select count(id) as cnt from jobseeker";  
              $res= mysqli_query($conn,$query);
              $row = mysqli_fetch_assoc($res);
              $row_count = $row['cnt'];
              echo "$row_count";
            ?>)</a>
            <a href="#" class="btn-book animated fadeInUp scrollto">Total Registered Companies(<?php 
              $query="select count(id) as cnt from company";  
              $res= mysqli_query($conn,$query);
              $row = mysqli_fetch_assoc($res);
              $row_count = $row['cnt'];
              echo "$row_count";
            ?>)</a>
            <a href="#" class="btn-book animated fadeInUp scrollto">Total Live Jobs(<?php 
              $query="select count(id) as cnt from jobpost";  
              $res= mysqli_query($conn,$query);
              $row = mysqli_fetch_assoc($res);
              $row_count = $row['cnt'];
              echo "$row_count";
            ?>)</a>
          </div>
          <br>
          <br>
          <br>
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Quick Job</span></h1>
          <h2>Fastest Way to Get a Job in Bangladesh!</h2>

          <div class="btns">
            <a href="../all_job.php" class="btn-menu animated fadeInUp scrollto">View All Live Jobs</a>
            <a href="../all_job.php" class="btn-book animated fadeInUp scrollto">Apply Now</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=vNQR3ixE8AE" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    
    

    <!-- ======= Search a job Section ======= -->

    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Search For a Job</h2>
          <p>Set Filters</p>
        </div>

        <form method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" action="search_with_filter.php">
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


        <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Categories</h2>
          <p>Category-Wise Jobs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>
                 
                
                
                   <span>
              <a href="" class="btn-book animated fadeInUp scrollto">

              <?php 
              $query="select jobTitle as cnt2, count(DISTINCT(id)) as cnt from jobpost
              GROUP BY jobTitle";  
              $res= mysqli_query($conn,$query);
             
              while ($row = mysqli_fetch_assoc($res)) {
              $row_count = $row['cnt'];
              $row_count2 = $row['cnt2'];
            ?>

            <a href="category_wise_job.php?category=<?php echo $row_count2 ?>">

              <?php echo "$row_count2";echo " : ";

              echo "$row_count"; 

               
              ?>

              <?php


              echo"<pre>"; 
               

             
              echo "</pre>";
              }
              
              

              ?>
                
              </a>
            </a>
            </span></h4>
                </div>
              </div>
            </div>
          </div>

          
    </section><!-- End Chefs Section -->


  <!-- ======= Division Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Locations</h2>
          <p>Location-Wise Jobs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>
                 
                
                
                   <span>
                  <a href="" class="btn-book animated fadeInUp scrollto">

              <?php 
              $query="select companyLoc as cnt2, count(DISTINCT(id)) as cnt from jobpost
              GROUP BY companyLoc";  
              $res= mysqli_query($conn,$query);
             
              while ($row = mysqli_fetch_assoc($res)) {
              $row_count = $row['cnt'];
              $row_count2 = $row['cnt2'];
            ?>

            <a href="location_wise_job.php?category=<?php echo $row_count2;?>" >
              <?php echo "$row_count2";echo " : ";
              echo "$row_count"; 

               
              ?>

              <?php



              echo"<pre>"; 
               // code goes here

             
              echo "</pre>";
              }
              
              

              ?></a></span></h4>
                </div>
              </div>
            </div>
          </div>

          
    </section><!-- End division Section -->



  <!-- ======= Hot Jobs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trending</h2>
          <p>Hot Jobs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>
                 
                
                
                   <span>
                  <a href="" class="btn-book animated fadeInUp scrollto">

              <?php 
              $query="select jobTitle as cnt2, count(DISTINCT(id)) as cnt from jobpost
              where salary>=30000 GROUP BY jobTitle ";  
              $res= mysqli_query($conn,$query);
             
              while ($row = mysqli_fetch_assoc($res)) {
              $row_count = $row['cnt'];
              $row_count2 = $row['cnt2'];
            ?>

            <a href="hot_jobs.php?category=<?php echo $row_count2;?>" >

              <?php echo "$row_count2";echo " : ";
              echo "$row_count"; 

               
              ?>

              <?php



              echo"<pre>"; 
               // code goes here

             
              echo "</pre>";
              }
              
              

              ?></a></span></h4>
                </div>
              </div>
            </div>
          </div>

          
    </section><!-- End Hot Jobs Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Hello there, I hope you all are enjoing your new jobs.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Sakil Sarker</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Hi. This is Nayeem for all of you girls.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Md Nayeem</h3>
            <h4>MD</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Weed is Life
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Kafi Khan</h3>
            <h4>Weed Store owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Play game, eat, sleep
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Rahat</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Go for friends girlfriend
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Nasif Jawad</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

    

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>



      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Road 3 House 32, Banasree, Dhaka</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>sadbinshakil75@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+880 1857297599</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Quick Job</h3>
              <p>
                Road 3 House 32<br>
                Banasree, Dhaka<br><br>
                <strong>Phone:</strong> +001 857297599<br>
                <strong>Email:</strong> sadbinshakil75@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>




        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Quick Job</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

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