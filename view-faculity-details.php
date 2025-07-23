<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

     <!-- Site Metas -->
    <title>Online College Faculty Record Management System || Faculty Details Page</title>  
   

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
			<h1>Faculty Details</h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
       
            <hr class="invis"> 

            <div class="row"> 
                
<?php
$fid=intval($_GET['fid']);
$query=mysqli_query($con,"select tblfaculity.ID as facid,tblfaculity.CollegeID,tblfaculity.FaculityName,tblfaculity.FaculityGender,tblfaculity.FaculityEmail,tblfaculity.FaculityMobileNo,tblfaculity.FaculityDeignation,tblfaculity.FaculityDepartment,tblfaculity.FaculityJobnature,tblfaculity.FaculityDOJ,tblfaculity.FaculityAcademicQualification,tblfaculity.FaculityPic,tblcollege.ID as cid,tblcollege.CollegeName,tblcollege.CollegeCode from tblfaculity join tblcollege on tblcollege.ID=tblfaculity.CollegeID where tblfaculity.ID='$fid'");
$cnt=1;
while($result=mysqli_fetch_array($query)){
?>
                <div class="col-lg-10 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="admin/teacherspic/<?php echo $result['FaculityPic']?>" height="350">
						</div>
						<div class="post-content">
							
							
							<div class="blog-title">
								<h2><a href="#" title=""><?php echo $result['FaculityName']?>{<?php echo $result['FaculityGender']?> Faculty}</a></h2>
							</div>
							<div class="blog-desc">
								<p><strong>College: </strong><?php echo $result['CollegeName']?>(<?php echo $result['CollegeCode']?>)</p>
								<p><strong>Academic Qualification: </strong><?php echo $result['FaculityAcademicQualification']?></p>
								<p><strong>Email Address: </strong><?php echo $result['FaculityEmail']?></p>
								<p><strong>Contact Number: </strong><?php echo $result['FaculityMobileNo']?></p>
								<p><strong>Designation: </strong><?php echo $result['FaculityDeignation']?></p>
								<p><strong>Department: </strong><?php echo $result['FaculityDepartment']?></p>
								<p><strong>Job Nature: </strong><?php echo $result['FaculityJobnature']?></p>
								
							
							</div>							
						</div>
					</div>
                </div><?php } ?>	
				
				
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