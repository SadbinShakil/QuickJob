
<?php
session_start();
if (!isset($_SESSION['jid'])) {
  header('location:jobseeker_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <style type="text/css">

    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');


   .wrapper{
    display: flex;
    position: relative;
  }

  .wrapper .sidebar{
    width: 200px;
    height: 100%;
    background: #4b4276;
    padding: 30px 0px;
    position: fixed;
    overflow-y: scroll;
  }

  .wrapper .sidebar h2{
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px;
  }

  .wrapper .sidebar ul li{
    padding: 15px;
    border-bottom: 1px solid #bdb8d7;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    border-top: 1px solid rgba(255,255,255,0.05);
  }    

  .wrapper .sidebar ul li a{
    color: #bdb8d7;
    display: block;
  }

  .wrapper .sidebar ul li a .fas{
    width: 25px;
  }

  .wrapper .sidebar ul li:hover{
    background-color: #594f8d;
  }

  .wrapper .sidebar ul li:hover a{
    color: #fff;
  }

  .wrapper .sidebar .social_media{
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
  }

  .wrapper .sidebar .social_media a{
    display: block;
    width: 40px;
    background: #594f8d;
    height: 40px;
    line-height: 45px;
    text-align: center;
    margin: 0 5px;
    color: #bdb8d7;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
  }

  .wrapper .main_content{
    width: 100%;
    margin-left: 200px;
  }

  .wrapper .main_content .header{
    padding: 20px;
    background: #fff;
    color: #717171;
    border-bottom: 1px solid #e0e4e8;
  }

  .wrapper .main_content .info{
    margin: 20px;
    color: #717171;
    line-height: 25px;
  }

  .wrapper .main_content .info div{
    margin-bottom: 20px;
  }

  @media (max-height: 500px){
    .social_media{
      display: none !important;
    }
  }



    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      text-decoration: none;
      font-family: 'Josefin Sans', sans-serif;
    }
    .body{
      background: url('../homepage/assets/img/bgs.jpg')no-repeat center center fixed ;
      -moz-background-size: cover;
      -webkik-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
.a{
      margin-left: 200px;
      margin-top: 200px;
      font-size: 55px;
 text-transform: capitalize;
 font-weight: 700;
 
 color: gray;
    }

</style>


</head>
<body class="JobSeeker">



  <div class="wrapper">
    <div class="sidebar">
      <h2>Hello JobSeeker</h2>
      <ul>
        <li><a href="../homepage/index.php"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="view_job.php"><i class="fas fa-user"></i>View Jobs with filters</a></li>
        <li><a href="../all_job.php"><i class="fas fa-user"></i>View All Jobs</a></li>
        <li><a href=""><i class="fas fa-address-card"></i>View Govt. Jobs</a></li>
        <li><a href=""><i class="fas fa-project-diagram"></i>View Applied Jobs Status</a></li>
        <li><a href=""><i class="fas fa-blog"></i>Update Profile</a></li>
        <li><a href=""><i class="fas fa-address-book"></i>Logout</a></li>
      </ul> 
      <div class="social_media">

        
      </div>
    </div>
      <div class="a">
   <h1> <?php echo "Hello, JobSeeker ID is: ".$_SESSION['jid'] ;   ?>
   </h1>
  </div>


  </body>
  </html>