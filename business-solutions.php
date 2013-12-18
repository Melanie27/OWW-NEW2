<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php include "_/components/php/title.php"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
     <!--<link href="_/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">-->
   
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body id="business-solutions">
  	<div class="container-full">  
  		<section class="container landing">
		 <?php include "_/components/php/header.php"; ?>
		 <section class="two">
			 <div class="row heading">
				 <section class="col-lg-12">
					 <div class="container">
						 <h1>Business Solutions and Industry Insights</h1>
						 <h2>80% of Fortune 1000 companies trust Oakwood with their corporate housing needs</h2>
					</div>
				</section>		
			</div><!--heading-->	
		  </section> <!--two-->		
		  <section class="three container">
			  
				  <?php include "_/components/php/industry-solutions.php"; ?>
				  
			</div><!--row-->
		</section><!--three-->
						
		<div class="row">
			<div class="col-lg-12">
				<section class="four hidden-sm hidden-xs">
				</section>
			</div>
		</div><!--content 4-->
		<hr>
		<section class="row industry-insights">
			<div class="col-lg-12">
				<section class="five">
					<div class="container">		
						<h1><a href="industry-insights.php">Industry Insights</a></h1>
						<?php include "_/components/php/industry-insights.php"; ?>	
					</div><!--container-->
				</section><!--five-->
			</div>
		</section>
  		<hr>
  		<section class="row">
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