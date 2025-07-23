<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

    <title>Online College Faculty Record Management System || Contact Page</title> 
   
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
			<h1>Contact<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Get In Touch!</h3>
                <?php $sql=mysqli_query($con,"select * from tblpage where PageType='contactus'");
$cnt=1;
while($data=mysqli_fetch_array($sql)){
?>
               <p class="lead"><strong>Address: </strong> <?php echo $data['PageDescription']?></p>
               <p class="lead"><strong>Contact Number: </strong> <?php echo $data['MobileNumber']?></p>
               <p class="lead"><strong>Email Address: </strong> <?php echo $data['Email']?></p>
             
               <?php  } ?>
            </div><!-- end title -->

         
        </div><!-- end container -->
    </div><!-- end section -->
	
	  <?php include_once("includes/footer.php");?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>