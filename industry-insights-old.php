<!DOCTYPE html>
<html lang="en">
  <head>
   <title><?php include "_/components/php/title.php"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
     <link href="_/css/mystyles_govt.css" rel="stylesheet" media="screen">
   
     <!--<link href="_/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">-->
   
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
  
  </head>
  <body id="industry-insights-government">
  	<div class="container-full">
  		<section class="container landing">
		  	<?php include "_/components/php/header.php"; ?>
		  	<section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Industry Insights: Government</h1>
						</div>
					</section>		
				</div><!--heading-->
				<?php include "_/components/php/hero-government.php"; ?>
		  	</section> <!--two-->			
			<hr>
			<div class="container">
				<?php include "_/components/php/insights-overview.php"; ?>
			</div><!--end container-->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<section class="four hidden-sm hidden-xs">
					</section><!--content 4-->
				</div><!-col-->
			</div><!--row-->
			<hr class="hidden-lg hidden-md hidden-sm">		
			<section class="row">
				<div class="col-lg-12 col-md-12">
					<section class="five container">
						<div class="row">
							<?php include "_/components/php/case-studies.php"; ?>
							<hr class="hidden-lg hidden-md hidden-sm">
							<?php include "_/components/php/videos.php"; ?>
							<hr class="hidden-lg hidden-md hidden-sm">
							<?php include "_/components/php/white-papers.php"; ?>
							<hr class="hidden-lg hidden-md hidden-sm">
						</div>
					</section><!--five-->						
				</div><!--columns-->
			</section><!--row-->
			<section class="content row">
				<div class="col-lg-12">
					<section class="six hidden-sm hidden-xs">
					</section>
				</div>
			</section><!--content 6-->
		<?php include "_/components/php/footer.php"; ?>	
  	</section><!-- container -->	
  </div>
  	<script src="_/js/bootstrap.js"></script>
  	<script src="_/js/myscript.js"></script>
  </body>
</html>