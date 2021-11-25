
<?php
// Show PHP errors
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once 'classes/user.php';

$objUser = new User();

// GET
if(isset($_GET['delete_id'])){
  $id = $_GET['delete_id'];
  try{
    if($id != null){
      if($objUser->delete($id)){
        $objUser->redirect('tables-data.php?deleted');
      }
    }else{
      var_dump($id);
    }
  }catch(PDOException $e){
    echo $e->getMessage();
  }
}


?>




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
<link rel="stylesheet" href="assets/bookingcss/bootstrap.min.css" 		type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="assets/bookingcss/style.css" 		type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="assets/bookingcss/jquery-ui.css" 	type="text/css" media="all">
<!-- Animate.CSS --> 	<link rel="stylesheet" href="assets/bookingcss/animate.css" 		type="text/css" media="all">
<!-- Fonts -->
<!-- Body-Font -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
<!-- Logo-Font -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
<!-- Navbar-Font --> <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css">
<!-- //Fonts -->


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"> 


    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>



    


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
					<a class="navbar-brand agileits w3layouts" href="indexs.php" style="color: #ffdac7">Chennai Guest House - Ooty </a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav navbar-nav agileits w3layouts">
						<li><a href="./index.php">Home</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <li><a href="./toursim.php">Tourism</a></li>
                        <li><a href="./BOOKING1.php">Booking</a></li>
                        <li><a href="./pages-login.php">Login</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->

<!-- Body -->
<body>

	<!-- Header -->
	
	<?php
    // (A) PROCESS RESERVATION
    if (isset($_POST["name"])) {
      require "2-reserve.php";
      if ($_RSV->save(
        $_POST["name"], $_POST["email"], $_POST["aadharno"], $_POST["paymentmode"], $_POST["startdate"],
        $_POST["enddate"],$_POST["status"]="Booked"))
		 {

			
			
			header('Location: \chennai%20guest%20housefinal/booking2.php');
      } 


	  
	  else { echo "<div class='err'>".$_RSV->error."</div>";  }
    }
    ?>

		
	</div>
	<!-- //Header -->



	
	<!-- //Location -->



	<!-- Booking -->
	<div class="reg agileits w3layouts">
		<div class="container">


			<div class="register agileits w3layouts">

				<h2>Book Your Guest House!</h2>


				
				<div class="row g-3">
				<div class="col-12">
					
				<form id="resForm" method="post" target="_self">
				<div  style="display:inline-block; width:48%;padding-right: 5%;">
                <label for="name" class="form-label"><h4> Name</h4></label>
			    <input type="text"required name="name" class="form-control"   placeholder="" value="" required>
                <p style="color: white;"></p></div>
			
			    
				<div class="col-12" style="display:inline-block; width:48%;padding-right: 5%;" >
				<label  class="form-label"><h4>Email</h4> <span class="text-muted"></span></label>
				<input type="email" class="form-control" required   placeholder="you@example.com"> 
				<p style="color: white;"></p></div>
				
					<br>
					<br>
					<br>
					<div class="col-12" style="display:inline-block; width:48%;padding-right: 5%;">
						<label for="email" class="form-label"><h4>Phone Number</h4> <span class="text-muted"></span></label>
						<input type="number" required name="email" class="form-control" required  maxlength="10">
						
					  </div>
					 
					<div class="col-12" style="display:inline-block; width:48%;padding-right: 5%;">
						<label for="aadharno" class="form-label"><h4>Aadhar NO</h4> <span class="text-muted"></span></label>
						<input type="text" required name="aadharno" class="form-control"  id="txtAadhar" onblur="AadharValidate();" required />
					</div>


						 
						  <script type="text/javascript">
						      function AadharValidate() {
						          var aadhar = document.getElementById("txtAadhar").value;
						          var adharcardTwelveDigit = /^\d{12}$/;
						          var adharSixteenDigit = /^\d{16}$/;
						          if (aadhar != '') {
						              if (aadhar.match(adharcardTwelveDigit)) {
						                  return true;
						              }
						              else if (aadhar.match(adharSixteenDigit)) {
						                  return true;
						              }
						              else {
						                  alert("Enter valid Aadhar Number");
						                  return false;
						              }
						          }
						      }
						  </script>








				<br>
				<br>
				<br>
	
					<div class="col-12" style="display:inline-block; width:48%;padding-right: 5%;">
					  <label for="address" class="form-label"><h4>Address</h4></label>
					  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
					  
					</div>
				

			<div class="col-12" style="display:inline-block; width:48%;padding-right: 5%;">
					  <label for="paymentmode" class="form-label"><h4>Payment Mode</h4> <span class="text-muted"></span></label>
					  <input type="text" class="form-control" required name="paymentmode"  placeholder="Online/Offline" required>
					</div>

					  <br>
					  <br>
					  <br>

<!--- hide past days --->
			<?php 
			$mindate = date("Y-m-d");
			 ?>

<!---  For getting start and end Date from db --->
            <?php
            $query = "SELECT startdate,enddate FROM crud_users WHERE status='booked' ";
            $stmt = $objUser->runQuery($query);
            $stmt->execute();
            ?>

<!--- Storing in variable --->
            <?php { 
            while($rowUser = $stmt->fetch(PDO::FETCH_ASSOC)){

				
				
            $fromdate=  ($rowUser['startdate']); 
			
            $todate=($rowUser['enddate']);



			$finaldate= $fromdate  . $todate;

       $stuff=array($finaldate);
		
		
			//  print($finaldate);

			// $stuff = array($finaldate);

			// reset($stuff);
			
			// for ($i=0; $i < count($stuff); $i++){
			// echo    current($stuff) . "<br>";
			// next($stuff);
			// }
			// reset($stuff);


			
		


			


// $stuff=$stuff array($fromdate,$todate);  



// $stuff= array($fromdate,$todate);
// array_push($stuff);



// print($stuff);
			
            


			  
			
 

		//   $array_to_json = json_encode( $finaldate ); 
			


          } } ?>


<!--- Grey out function  Startdate -->			
 
          <!-- <script>
			 
	       $("#startdate").change(function(){
			
   var ddlValue = $("#startdate option:selected").val();
   if(ddlValue == $fromdate){
	print($fromdate);
      $("#startdate").prop('disabled', true);
    }
 })
		   </script>  -->

<!--- Grey out function  Enddate -->	
          <!-- <script>
	       $("#enddate").change(function(){
			
           var ddlValue = $("#enddate option:selected").val();
          
           if(ddlValue == $todate){
           $("#enddate").prop('disabled', true);
           }
          })
		</script> -->


<!---  UI code --->

      <label><p style="color: white;">Checkin Date</p></label>
      <input  required id="startdate" name="startdate" min="<?=$mindate?>"  class="form-control datepicker" autocomplete="off" required>
	<br>
	<br>
      <label><p style="color: white;">Checkout Date</p></label>
       <input  required id="enddate" name="enddate" min="<?=$mindate?>"  class="form-control datepicker" autocomplete="off" required> 
	   <p id="demo"></p>
	 
	 


<script>





 var disableDates = [<?php  echo json_encode($stuff); ?>];
 console.log(<?php echo json_encode($stuff); ?>);

 console.log(disableDates);

//  for(var i = 0; i < disableDates.length; i++){
	 
//       console.log(disableDates.length);
//    }
 
//  document.getElementById("demo").innerHTML = disableDates;
              

//  var disableDates = ["23-11-2021", "24-11-2021"];

    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        beforeShowDay: function(date){
            dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
            if(disableDates.indexOf(dmy) != -1){
				
                return false;
            }
            else{
                return true;
            }
        }
    });
</script>


			 

<br>
<br>
				<div class="book-pag wow agileits w3layouts slideInLeft">
					<p style="color: white;">    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    Check-in/check-out time: 11:00 AM and 01:00 PM</p>		
			</div>

	

			
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

</p>

	<body>
		<br>
		
		<button class="btn" type="submit" required id="status"  ><p style="text-align: left;">Proceed</p> </button>
		



	

		
	
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
			<!-- <script type="text/javascript">
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
			<a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a> -->
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