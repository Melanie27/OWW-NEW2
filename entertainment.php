<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <title><?php include "_/components/php/title.php"; ?></title>
     <meta name="description" content="">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
			<hr />
			<div class="container">
				<?php include "_/components/php/extended-stay-lodging.php"; ?>
			</div><!--end container-->		
			<hr />
			<section class="row hidden-sm hidden-xs">
				<div class="col-lg-12">
					<section class="four">
					</section>
				</div>
			</section><!--content 4-->
			<section class="container three">	
				<div class="row ">
					<section class="col-lg-12 col-md-12 col-xs-12">
						<div class="row">
							<section class="col-lg-6 col-md-6 col-sm-12 col-xs-12 entertainment-intro child-actors">
								<h1>Child Actors Program</h1>
								<h2>Each year many children and their parents come to Hollywood from all over the world to work in television, film, music and theatre. Oakwood Toluca Hills is the ideal apartment community for all aspiring stars.</h2>
								<section class="col-lg-8 col-lg-offset-2 col-xs-12">
									<div class="row archives">
										<section class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
											<a class="link-archives see-all text-center" href="upcoming-events.php">Learn More</a>
										</section>
									</div>
								</section><!--end button-->
							</section><!--end child actors-->
							<hr class="hidden-lg hidden-md">
							<section class="col-lg-6 col-md-6 entertainment-intro filming">
								<h1>Filming At Oakwood Worldwide</h1>
								<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et augue tempus magna elementum pharetra. Aenean nisi nibh, sollicitudin eget facilisis blandit, dignissim sed tortor. Etiam at volutpat sem. Sed augue.</h2>
								<section class="col-lg-8 col-lg-offset-2">
									<div class="row archives">
										<section class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
											<a class="link-archives see-all text-center" href="upcoming-events.php">Learn More</a>
										</section>
									</div>
								</section><!--end button-->
							</section><!--end film-->
						</div><!--end nested row-->
					</section>
				</div>
			</section><!--end three-->
			<hr />			
			<section class="container five">
				<div class="row">			
					<section class="tab-section">
						<h1>Why does the Entertainment Industry Prefer Oakwood?</h1>
							<?php include "_/components/php/industry-tabs-phone.php"; ?>	
					</section>	
				</div><!--end tabbed section-->
			</section>
			<hr class="margin-bottom" />
			<div class="row industry-insights">
				<section class="col-sm-12 hidden-lg hidden-md">
					<div class="container">
						<h1>Industry Insights</h1>
					</div>
					<?php include "_/components/php/industry-insights.php"; ?>
				</section>
			</div>
			<hr />
			<section class="row hidden-sm">
				<div class="col-lg-12 hidden-xs">
					<section class="six">
					</section>
				</div>
			</section><!--content 6-->	
			<hr class="hidden-xs hidden-sm">
			<?php include "_/components/php/footer.php"; ?>	
		</section><!-- container -->	
	</div>
  	<script src="_/js/bootstrap.js"></script>
  	<script src="_/js/myscript.js"></script>
  </body>
</html>