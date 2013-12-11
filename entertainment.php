<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OWW Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles_govt.css" rel="stylesheet" media="screen">
     <link href="_/css/mystyles_entertainment.css" rel="stylesheet" media="screen">
   
     <!--<link href="_/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">-->
   
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
 
   
  </head>
  <body id="entertainment">
  <div class="container-full">
  
  		<section class="container landing">
		  	<?php include "_/components/php/header.php"; ?>
		  	<section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Business Solutions: Entertainment</h1>
						</div>
					</section>		
				</div><!--heading-->
				<?php include "_/components/php/hero-government.php"; ?>
		  	</section> <!--two-->	
		  				
						
			<div class="hidden-sm hidden-xs sub-navigation container">
				<section class="row">
					<div class="col-lg-12 center-block">
						<nav class="navbar navbar-default sub-nav" role="navigation">
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li id="overview1" class="active"><a href="#overview">Overview</a></li>
									<li id="military1"><a href="#">Film & Television Production</a></li>
									<li id="federal-civilian1"><a href="#federal-civilian">Child Actors Program</a></li>
									<li id="government-contractors1"><a href="#government-contractors">Theatre, Music & Stage</a></li>
									<li id="gsa1"><a href="#gsa">Gaming</a></li>
									<li id="schools1"><a href="#">Entertainment Schools</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</section>
			</div><!--end sub-nav-->
			
			<hr>
			
			<div class="container">
				<?php include "_/components/php/extended-stay-lodging.php"; ?>
			</div><!--end container-->
					
			<hr>
			
			<section class="container">	
				<div class="row hidden-xs">
					<section class="tab-section">
						<h1>Why does the Entertainment Industry Prefer Oakwood?</h1>
							<?php include "_/components/php/industry-tabs.php"; ?>	
					</section>	
				</div><!--end tabbed section-->
			</section>	
				
			<hr>
				
				<div class="row industry-insights">
					<section class="col-sm-12 hidden-lg hidden-md">
						<div class="container">
							<h1>Industry Insights</h1>
						</div>
						<?php include "_/components/php/industry-insights.php"; ?>
					</section>
				</div>
				
				
				<!--ACCORDION-->
				<div class="row">
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
						<?php include "_/components/php/entertainment-film.php"; ?>	
											
  				</section>
  				
  				
  							
		
				<!--Child Actors Accordion Panel-->
				
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">									
						<?php include "_/components/php/entertainment-child-actors.php"; ?>
				</section>
					
				
				<hr>
				
				
				
				<!--Theatre Accordion Panel-->
				
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
					<?php include "_/components/php/entertainment-theatre.php"; ?>					
				</section>
				
				<hr>
				
				<!--Gaming Accordion Panel-->
				
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
					<?php include "_/components/php/entertainment-gaming.php"; ?>
				</section>
				
				
				<hr>
				
				<!--Schools Accordion Panel-->
				
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
					<?php include "_/components/php/entertainment-schools.php"; ?>
				</section>
				
			</div><!--end row that holds accordion-->		
				
				


				
				
				<?php include "_/components/php/footer.php"; ?>	

  			
  		
  	</section><!-- container -->
  	
  </div>
  	<script src="_/js/bootstrap.js"></script>
  	<script src="_/js/myscript.js"></script>
  </body>
</html>