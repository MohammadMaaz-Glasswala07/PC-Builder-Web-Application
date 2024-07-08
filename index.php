<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Pc-Builder Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/builitem.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<!-- ================================== TOP NAVIGATION ================================== -->
	<?php include('includes/side-menu.php');?>
<!-- ================================== TOP NAVIGATION : END ================================== -->
			</div><!-- /.sidemenu-holder -->	
			
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				<!-- ========================================== SECTION – HERO ========================================= -->
			
<div id="hero" class="homepage-slider3">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
		<div class="full-width-slider">	
			<div class="item" style="background-image: url(assets/images/sliders/slider1.jpg);">
				<!-- /.container-fluid -->
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->
	    
	    <div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(assets/images/sliders/slider2.jpg);">
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->

	</div><!-- /.owl-carousel -->
</div>
					
	</div>
	</div>	
		<!-- ============================================== BUILD-ITEMS TABS ============================================== -->
		<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vswfadeInUp">
			<div class="more-info-tab clearfix" style="padding: 5px;">
			   <h3 class="new-product-title pull-left">Featured Build List.</h3>
				<div style="float:right;">
                   <a href="#build1">
                    <button class="build1">Office-Build</button>
                    </a>
                    <a href="#build2">
                    <button class="build2">Workstation-Build</button>
                    </a>
                     <a href="#build3">
                    <button class="build3">Gaming-Build</button>
                    </a>
			
			  </div>

		</div>
	</div>
   <div style="border: 2px solid;padding:2px;float:left;height:100%;">
      <div style="padding:10px;float:left;width:33.33%;">
  	      <div id="build1" style="height:100%">
            <img src="assets\images\sliders\img1.jpeg" alt="Snow" >
            <h1>Intel Office Build. </h1>

               <p><h2>Description:</h2>

                  <h3><b>CPU</b></h3>

                      <p>Our CPU of choice is the Intel Core i3-13100F. This CPU is inexpensive but still packs a punch with its 4 cores/8 threads and 4.3 GHz turbo frequency.
                      </p>

                  <h3><b>Cooler</b></h3>

                      <p>Designed to help properly cool your CPU by dissipating heat and be aesthetically appealing. All of this while delivering you the performance you desire that complements the Intel® Core™ processor.
                      </p>

                  <h3><b>Motherboard</b></h3>

                      <p>We're using a parametric filter to constantly select the best-priced ATX or mATX motherboard while meeting selected criteria. In this case, we are filtering for B660 chipsets and 4 DDR4 DIMM slots for future expansion. The compatibility engine will filter out anything not compatible with the build. The motherboards are also capable of using the CPU's integrated GPU, in case you need to RMA your GPU or are waiting for a sale or upgrade.
                      </p>

                  <h3><b>Memory</b></h3>

                      <p>For this build and most machines outside of the top end we opted to go with 16GB of DDR4 memory with CAS latency no higher than 18 clock cycles. The parametric filter finds the best price on 2x8GB kits of memory that are within Intel's recommended specifications.
                      </p>

                  <h3><b>Storage</b></h3>

                      <p>We're also using a parametric filter to select the best priced NVME SSD available that is at least 480GB. Everyone's storage needs are different, so feel free to change drive capacity or add a drive to fit yours.
                      </p>

                  <h3><b>GPU</b></h3>

                      <p>We have set a parametric filter for the best-priced Radeon RX 6600, which will let you play any popular game available today, including Valorant, Fortnite, PUBG, Apex Legends, and Minecraft.
                      </p>

                  <h3><b>Case</b></h3>

                      <p>The Cooler Master MasterBox Q300L is an mATX mini tower case with 2x front panel USB 3.0 Gen 1 ports and fits full-size graphics cards without issue. It provides several cable management holes and a couple patterned magnetic dust filters for easy removal and cleaning. If you so wish, you can also move the I/O panel to up to six different locations on the case.
                      </p>

                  <h3><b>PSU</b></h3>

                      <p>We're using a parametric selection of well-reviewed units, all of which are 80+ Bronze certified or above and can provide plenty of power for this build. Note that because there are issues with PSU availability right now, some non-modular PSUs have been added to the build to help you get the parts you need. These are still high quality PSUs.
                      </p>
                   </p>
         </div>
      </div>
      <div style="border-right: 2px solid;border-left: 2px solid;padding:13px;float:left;width:33.33%;">
         <div id="build2" style="height: 100%;">
             <img src="assets\images\sliders\img2.jpg" alt="Forest" >
             <h1>Worksation Build.</h1>

               <p><h2>Description:</h2>

                  <h3><b>CPU</b></h3>

                       <p>The Intel Core i9-14900K is one of the fastest gaming CPUs available. It offers 8 Performance-cores, 16 Performance threads, 16 Efficient-cores, a base frequency of 3.2GHz, and a turbo frequency of 6GHz. The unlocked multiplier enables easy and significant overclocking.
                       </p>

                  <h3><b>Cooler</b></h3>

                       <p>We recommend liquid cooling to take better advantage of the Core i9-14900K's performance potential. In this guide we are using the ARCTIC Liquid Freezer II 360 A-RGB.
                       </p>

                  <h3><b>Motherboard</b></h3>

                       <p>We're using a parametric filter of Z790 motherboards. The Z790 chipset allows the i9-14900K CPU to be overclocked.
                       </p>

                  <h3><b>Memory</b></h3>

                       <p>For memory, we're filtering for the best-priced 2x16GB kit of DDR5 RAM with a heatsink. We've limited it to DDR5-6000 and faster speeds and 30 CAS latency or lower.Since the parametric filter picks the lowest priced option available (regardless of color/design), click the "From parametric filter" link to view other options that might better suit your aesthetic preference.
                       </p>

                  <h3><b>Storage</b></h3>

                       <p>We are using a parametric selection of well-reviewed 2TB NVME M.2 SSDs. Everyone's storage needs differ, so you may wish to select similar SSDs with different capacities or even adding in a mechanical HDD for larger storage needs.
                       </p>

                  <h3><b>GPU</b></h3>

                       <p>The GeForce RTX 4090 by NVIDIA is one of the fastest GPUs in existence. You should definitely pair it with a high refresh rate and/or high resolution monitor to take full advantage of the card's capabilities.The RTX 4090 will have no problem playing any and and all applications currently on the market.NVIDIA's NVENC encoding feature will offload the task of streaming to the GPU with a minimal performance hit when using OBS (Open Broadcaster Software), while still providing image quality on par with (or better than) “x264 Fast” quality.
                       </p>

                  <h3><b>Case</b></h3>
                       <p>The selected case is the black NZXT H9 Elite. This ATX mid tower case includes tempered glass windows on the side and front. It also features 1x USB 3.2 Type-C, 2x front panel USB 3.2 Gen 1 ports, and a number of cable management holes and tie-offs to help your build look cleaner. It can also fit full-sized video cards.here is also a white option for the case.
                       </p>

                  <h3><b>PSU</b></h3>

                       <p>For powering the build, we are using a sparse selection of some of the most well-reviewed PSUs available that still fall in a reasonable price range. All of them are fully modular and rated 80+ Gold or Platinum efficiency.</p>
                       </p>
      </div>
   </div>
      <div  style="padding:10px;float:left;width:33.33%;height:auto">
         <div id="build3" style="height:100px">
            <img src="assets\images\sliders\pc3.jpg" alt="Mountains">
            <h1>AMD Gaming Build. </h1>
            
               <p><h2>Description: </h2>

                     <h3><b>CPU</b></h3>

                          <p>The Ryzen 7 7800X3D is an 8-core processor that utilizes AMD SMT technology for a total of 16 threads.If you'd prefer to consider a similar build, but instead using an Intel processor.
                          </p>

                     <h3><b>Cooler</b></h3>

                          <p>For better CPU cooling performance, we are using the Deepcool AK620 ZERO DARK.</p>

                     <h3><b>Motherboard</b></h3>

                          <p>We're using a parametric filter for B650 and B650E ATX motherboards. Our compatibility and pricing engines will automatically select the best-priced motherboard that is compatible with the rest of the build.</p>

                     <h3><b>Memory</b></h3>

                          <p>For memory, we're filtering for the best-priced 2x16GB kit of DDR5 RAM with a heatsink. We've limited it to DDR5-6000 and faster speeds and CAS latency of 30 or lower.</p>

                     <h3><b>Storage</b></h3>

                          <p>We are using a parametric selection of well-reviewed 1TB NVME M.2 SSDs. Everyone's storage needs differ, so you may wish to select similar SSDs with different capacities or even adding in a mechanical HDD for larger storage needs.</p>

                     <h3><b>GPU</b></h3>

                          <p>Our GPU is NVIDIA's GeForce RTX 4070 Ti. Consider pairing it with a high refresh rate and/or high resolution monitor to take full advantage of the card's capabilities.The parametric filter is set for the best-priced RTX 4070 Ti available, but feel free to click the "From parametric filter" link to browse our listing of all RTX 4070 Tis. For those interested in VR, the RTX 4070 Ti will have no problem playing any and and all applications currently on the market.
                          </p>

                     <h3><b>Case</b></h3>

                          <p>All of our components are housed in the Corsair iCUE 4000X RGB case. This case features a black design with a tempered glass side panel and front window. It includes one front panel USB 3 port, one USB Type-C port, RGB front panel, a PSU shroud, and a number of cable management holes and tie-offs to help your build look cleaner. It can also comfortably fit full-sized video cards and large CPU coolers.
                          </p>

                     <h3><b>PSU</b></h3>

                          <p>Powering the build is a sparse selection of some of the most well-reviewed PSUs available - all without breaking the bank. All of them are certified 80+ Gold and fully-or semi-modular.Note that because there are issues with PSU availability right now, some non-modular PSUs have been added to the build to help you get the parts you need. These are still high quality PSUs.</p>
                          </p>
         </div>
   </div>
      
 
         <!-- ============================================== TABS ============================================== -->

</div>			
<?php include('includes/brands-slider.php');?>
</div>
</div>
<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>	

</body>
</html>