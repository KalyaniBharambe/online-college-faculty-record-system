<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

    <title>Online College Faculty Record Management System || About Us Page</title> 
    <!-- Site Icons -->
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<?php include_once("includes/header.php");?>
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>About Us</h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">

            <?php
$ret=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        
                        <h2><?php  echo $row['PageTitle'];?></h2>
                        <p><?php  echo $row['PageDescription'];?>.</p>

                    </div><!-- end messagebox -->
                </div><!-- end col --><?php } ?>
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
		
        </div><!-- end container -->
    </div><!-- end section -->


   



 <?php include_once("includes/footer.php");?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>