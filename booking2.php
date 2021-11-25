



<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>

<title>Booking</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Chennai Guest House - Ooty  a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="assets/bookingcss/bootstrap.min.css" type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="assets/bookingcss/style.css" 		type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="assets/bookingcss/jquery-ui.css" 	type="text/css" media="all">
<!-- Animate.CSS --> 	<link rel="stylesheet" href="assets/bookingcss/animate.css" 		type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<!-- Body-Font -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
<!-- Logo-Font -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
<!-- Navbar-Font --> <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css">
<!-- //Fonts -->

</head>
<!-- //Head -->
		<!-- Navbar -->
		<nav class="navbar navbar-default inner-pages-navbar agileits w3layouts wow bounceInUp">
			<div class="container">

				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
					<a class="navbar-brand agileits w3layouts" href="indexs.html" style="color: #ffdac7">Chennai Guest House - Ooty </a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav navbar-nav agileits w3layouts">
						<li><a href="./index.html">Home</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./toursim.html">Tourism</a></li>
                        <li><a href="./BOOKING1.html">Booking</a></li>
                        <li><a href="./pages-login.html">Login</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->

<!-- Body -->
<body>

	<!-- Header -->
	


		
	</div>
	<!-- //Header -->



	
	<!-- //Location -->



	<!-- Booking -->
	<div class="reg agileits w3layouts">
		<div class="container">

			<div class="register agileits w3layouts">

				
				
				
			
<style>
	.filterDiv {
	  float: left;
	
	  color: #ffffff;
	  width: 100px;
	  padding: 10px 180px;
	  line-height: 100px;
	  text-align: center;
	  margin: 20px;
	  display: none;
	}
	
	.show {
	  display: block;
	}
	
	.container {
	  margin-top: 20px;
	  overflow: hidden;
	}
	
	/* Style the buttons */
	.btn {
	  border: none;
	  outline: none;
	  padding: 10px 250px;
	  background-color: #f1f1f1;
	  cursor: pointer;
	}
	
	.btn:hover {
	  background-color: #ddd;
	}
	
	.btn.active {
	  background-color: #666;
	  color: white;
	}
	</style>
	<body>
		<br>
	
	<h2>Payment mode</h2>
	
	<div id="myBtnContainer">
	  
	  <button class="btn" onclick="filterSelection('cars')" ><p style="text-align: left;">Online payment</p> </button>
	  <br>
	  <br>
	  <button class="btn" onclick="filterSelection('animals')"> Cash on arrival</button>

	</div>
	
	<div class="container">
	  <div class="filterDiv cars"><a class="popup-with-zoom-anim agileits w3layouts" href="https://rzp.io/l/tBzI31JP7">BOOK NOW</a></div>

	  <div class="filterDiv animals fading"> <a class="popup-with-zoom-anim agileits w3layouts" href="#small-dialog2">BOOK NOW</a></div>
	</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br>
	<script>
	filterSelection("all")
	function filterSelection(c) {
	  var x, i;
	  x = document.getElementsByClassName("filterDiv");
	  if (c == "") c = "";
	  for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	  }
	}
	
	function w3AddClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	  }
	}
	
	function w3RemoveClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		  arr1.splice(arr1.indexOf(arr2[i]), 1);     
		}
	  }
	  element.className = arr1.join(" ");
	}
	
	// Add active class to the current button (highlight it)
	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	  });
	}
	</script>

			
				
	
	<!-- Popup-Box -->
					<div id="popup">
						<div id="small-dialog" class="mfp-hide agileits w3layouts">
							<div class="pop_up agileits w3layouts">
								<div class="payment-online-form-left agileits w3layouts">
									<form>
										<br>
										<br>
										<br>
										<br>
										
											
											<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_INnWLpfXWpC3CQ" async> </script> </form>
				

								
								</ul>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<button title="Close (Esc)" type="button" class="mfp-close agileits w3layouts">×</button>
					<!-- //Popup-Box -->
	
				</div>
	
			</div>
		</div><!-- //Popup-Box -->


		<!-- Popup-Box -->
		<div id="popup">
			<div id="small-dialog2" class="mfp-hide agileits w3layouts">
				<div class="pop_up agileits w3layouts">
					<div class="payment-online-form-left agileits w3layouts">
						<br>
						<br>
					
					
						<form>
							<ul class="payment-sendbtns agileits w3layouts">
								<li class="agileits w3layouts"><input type="reset" value="Reset"></li>
								<li class="agileits w3layouts"><input type="reset" value="offline"></li>
	

					
					</ul>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<button title="Close (Esc)" type="button" class="mfp-close agileits w3layouts">×</button>
		<!-- //Popup-Box -->

	</div>

</div>
</div><!-- //Popup-Box -->



		
	
	<!-- //Booking -->





	





	<!-- Necessary-JavaScript-Files-&-Links -->

		<!-- Default-JavaScript -->	  <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

		<!-- Animate.CSS-JavaScript -->
			<script src="assets/js/wow.min.js"></script>
				<script>
					new WOW().init();
				</script>
		<!-- //Animate.CSS-JavaScript -->

		<!-- Booking-Popup-Box-JavaScript -->
			<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!-- //Booking-Popup-Box-JavaScript -->


		<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 100,
						easingType: 'linear'
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="assets/js/move-top.js"></script>
			<script type="text/javascript" src="assets/js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

		<!-- Date-Picker-JavaScript -->
			<script src="assets/js/jquery-ui.js"></script>
			<script>
				$(function() {
					$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
				});
			</script>
		<!-- //Date-Picker-JavaScript -->

	<!-- //Necessary-JavaScript-Files-&-Links -->



</body>
<!-- //Body -->

</html>
