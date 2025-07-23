<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

    
     <!-- Site Metas -->
    <title>Online College Faculty Record Management System || Faculty Page</title>  
   

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
			<h1>Faculities<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
				
<?php $query=mysqli_query($con,"select * from tblfaculity");
$cnt=1;
while($result=mysqli_fetch_array($query)){
?>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="admin/teacherspic/<?php echo $result['FaculityPic']?>">
						
						</div>
						<div class="team-content">
							<a href="view-faculity-details.php?fid=<?php echo $result['ID'];?>"><h3 class="title"><?php echo $result['FaculityName']?></h3></a>
							<span class="post"><?php echo $result['FaculityDeignation']?></span>
						</div>
					</div>
				</div><?php $cnt++;} ?>

			
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	


    

   <?php include_once("includes/footer.php");?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>