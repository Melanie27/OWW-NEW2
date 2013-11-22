<!DOCTYPE html>
<html>
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

<link href="_/css/smint-demo.css" rel="stylesheet" type="text/css">

</head>

<body id="government">
<div class="container-full">
<section class="container landing">






	<div class="wrap">

	 	 <section class="subMenu-smint" >
		 	 <div class="inner">
			 	 <a href="#" id="sTop" class="subNavBtn">Home</a> 
			 	 <a href="#" id="s1" class="subNavBtn">Overview</a>
			 	 <a href="#" id="s2" class="subNavBtn">Military</a>
			 	 <a href="#" id="s3" class="subNavBtn">Federal Civilian</a>
			 	 <a href="#" id="s4" class="subNavBtn">Government Contractors</a>
			 	 <a href="#" id="s5" class="subNavBtn end">GSA Schedule 48</a>
			 </div><!--end inner-->	
		</section><!--end submenu-->


		<div class="section sTop">
			<div class="inner">
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
			</div>
		</div><!--end stop-->


		<div class="section s1">
			<div class="inner">
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
				</div><!--end industry insights-->
				
			</div>
		</div><!--end s1-->

		<div class="section s2">
			<div class="inner">
				
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
			
			</div>
		</div><!--end s2-->

		<div class="section s3">
			<div class="inner">
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
			</div>
		</div><!--end s3-->

		<div class="section s4">
			<div class="inner">
				<!--Government Contractors Accordion Panel-->
				
			<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
				<?php include "_/components/php/government-government-contractors.php"; ?>													</section>
				
			<div class="content row">
				<div class="col-lg-12">
					<section class="eight hidden-sm hidden-xs">
					</section>
				</div>
			</div><!--content 10-->
			</div>
		</div><!--end s4-->

		<div class="section s5">
			<div class="inner">
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
			</div>
		</div><!--end s5-->


	</div><!--wrap-->
	
	<?php include "_/components/php/footer.php"; ?>	
</section><!-- container -->
  	
</div>	

	<script src="_/js/bootstrap.js"></script>
	<script src="_/js/myscript.js"></script>
	<script type="text/javascript" 	src="_/js/jquery.smint.js"></script>
	
	<script type="text/javascript">
	
		$(document).ready( function() {
			$('.subMenu-smint').smint({
				'scrollSpeed' : 1000
			});
		});

	</script>
</body>
</html>