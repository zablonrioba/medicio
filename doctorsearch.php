	

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medicio HOME</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
					</div>
					<div class="col-sm-6 col-md-6">
						  					  
	<form action="doctorsearch.php" method="GET">
    <input class="form-control input-md" type="text" name="id"placeholder="Search by specialist..." >
    <input class="btn btn-skin btn-lg" type="submit" value="Search" >
     </form>
	
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
				
				
	
            </div>

	
	
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#service">Service</a></li>
				<li><a href="#doctor">Doctors</a></li>
				<li><a href="#facilities">Facilities</a></li>
	
			  </ul>
	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

	

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				
			</div>
		</div>
							
			
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
			

            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
				
<?php

include('db_connection.php');

error_reporting(E_ERROR | E_PARSE);

			$id="";
			$id = $_GET['id'];
global $conn;


	
	if($conn-> connect_error){
		die(" connecction has failed ". $conn-> connect_error)	;
	}
	
	
		
			
	 	$result=mysqli_query($conn,"SELECT * FROM doctors WHERE doctor_specialty='$id'");
		
		if($result->num_rows > 0) {
	 	 while($row=mysqli_fetch_array($result) ){
			
	  
	
	

?>
                    <li class="cbp-item psychiatrist">
                        <a href="member.php?id=<?php echo $row['doctor_id']?>" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/<?php echo $row['doctor_picture']?>" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="member.php?id=<?php echo $row['doctor_id']?>" class=" cbp-l-grid-team-name"><?php echo $row['doctor_full_name']?></a>
                        <div class="cbp-l-grid-team-position"><?php echo $row['doctor_specialty']?></div>
														
                    </li>
					<?php
		 }
		}else{
			
			echo "0 results";
		}
		

?>
					
                    
                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->

	
	

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
