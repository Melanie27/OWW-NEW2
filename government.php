<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OWW Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
     <link href="_/css/mystyles_govt.css" rel="stylesheet" media="screen">
   
     <!--<link href="_/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">-->
   
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
 
   
  </head>
  <body id="government">
  <div class="container-full">
  
  		<section class="container landing">
		  	<?php include "_/components/php/header.php"; ?>
		  	<section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Business Solutions: Government</h1>
						</div>
					</section>		
				</div><!--heading-->
				<?php include "_/components/php/hero-government.php"; ?>
		  	</section> <!--two-->	
		  				
						
			<div class="container hidden-lg hidden-md hidden-sm hidden-xs">
				<section class="row">
					<div class="col-lg-12">
				
						<nav class="navbar navbar-default sub-nav" role="navigation">
					
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li id="overview1" class="active"><a href="#overview">Overview</a></li>
									<li id="military1"><a href="#">Military</a></li>
									<li id="federal-civilian1"><a href="#federal-civilian">Federal Civilian</a></li>
									<li id="government-contractors1"><a href="#government-contractors">Government Contractors</a></li>
									<li id="gsa1"><a href="#gsa">GSA Schedule 48</a></li>
									
								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>

					</div>
				</section>
			</div><!--end sub-nav-->
			
			
			<div class="container">
				<?php include "_/components/php/government-overview.php"; ?>
			</div><!--end container-->
					
				
				<div class="content row">
					<div class="col-lg-12 col-md-12">
						<section class="four hidden-sm hidden-xs">
						</section>
					</div>
				</div><!--content 4-->
				
				
				<div class="row industry-insights">
					<section class="col-sm-12 hidden-lg hidden-md">
						<h1>Industry Insights</h1>
						<?php include "_/components/php/industry-insights.php"; ?>
					</section>
				</div>
				
				
				<!--ACCORDION-->
				<div class="row">
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
						<?php include "_/components/php/government-military.php"; ?>							
  				</section>
  				<div class="content row">
					<div class="col-lg-12">
						<section class="six hidden-sm hidden-xs">
						</section>
					</div>
				</div><!--content 6-->
				
		
				<!--Federal Civilian Accordion Panel-->
				
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">									
						<?php include "_/components/php/government-federal-civilian.php"; ?>
					</section>
					
				
				<div class="content row">
					<div class="col-lg-12">
						<section class="eight hidden-sm hidden-xs">
						</section>
					</div>
				</div><!--content 8-->
				
				
			<!--Government Contractors Accordion Panel-->
				
			<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
				<?php include "_/components/php/government-government-contractors.php"; ?>													</section>
				
			<div class="content row">
				<div class="col-lg-12">
					<section class="eight hidden-sm hidden-xs">
					</section>
				</div>
			</div><!--content 10-->
				
				<!--GSA Schedule 48 Accordion Panel-->
				
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
					<?php include "_/components/php/government-gsa.php"; ?>
				
				</section>
			</div><!--end row that holds accordion-->		
				
				<div class="content row">
					<div class="col-lg-12">
						<section class="eight hidden-sm hidden-xs">
						</section>
					</div>
				</div><!--content 12-->


				
				
				<?php include "_/components/php/footer.php"; ?>	

  			
  		
  	</section><!-- container -->
  	
  </div>
  	<script src="_/js/bootstrap.js"></script>
  	<script src="_/js/myscript.js"></script>
  </body>
</html>