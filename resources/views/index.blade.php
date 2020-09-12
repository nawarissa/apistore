
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>OnceUponAtime</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">


<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="css/easy-responsive-tabs.css"><!-- easy responsive tabs css -->

<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all"><!-- date-picker css-->

<!-- gallery -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->

<!-- banner text effect css files -->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
<!-- banner text effect css files -->

<!-- logo text effect css files -->
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<link rel="stylesheet" type="text/css" href="css/linkstyles.css" />
<!-- //logo text effect css files -->

<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- default css files -->

<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!--//web font-->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //scrolling script -->

</head>

<!-- Body -->
<body>

<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container-fluid">
					<div class="header-left">
						<div class="w3layouts-logo grid__item">
							<h1>
								<a class="link link--ilin" href="#"><span>OnceUp</span><span>onAtime</span></a>
							</h1>
						</div>
					</div>
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="/">Home</a></li>
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#services" class="scroll">Services</a></li>
									<li><a href="#chefs" class="scroll">Chefs</a></li>
									<li><a href="#gallery" class="scroll">Gallery</a></li>
									<li><a href="#customer" class="scroll">Customers</a></li>
									<li><a href="#contact" class="scroll">Contact</a></li>
								</ul>

					<div class="clearfix"> </div>
							</div>
						</nav>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			
								
							</ul>
						</div>

				</div>
					</div>

			</div>
			<div class="agileits-banner-info">
				<h3>welcome to</h3>
					<h2 class="rw-sentence">
					<span>Food tastes better, eat with your </span>
					<div class="rw-words rw-words-1">
						<span>Family</span>
						<span>Friends</span>
						<span>happiness</span>
						<span>Love</span>
						<span>Gratefulness</span>
						<span>happiness</span>
					</div>
					</h2>
					<a href="{{ route('book') }}">Book Your Table</a>
			</div>
		</div>
	</div>
<!-- //banner -->

<!-- tabs  js-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>

<!-- //tabs-js  -->

<!-- gallery js -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
			$.fn.lightspeedBox();
		});
	</script>
<!-- //gallery js -->

<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 3,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint:480,
							visibleItems: 1
						},
						landscape: {
							changePoint:640,
							visibleItems:3
						},
						tablet: {
							changePoint:768,
							visibleItems: 3
						}
					}
				});

			});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script src="js/jarallax.js"></script>
		<script src="js/SmoothScroll.min.js"></script>
		<script type="text/javascript">
			/* init Jarallax */
			$('.jarallax').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
		</script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

				});
		</script>
	<!-- //here ends scrolling icon -->


	<!-- Date-Picker-JavaScript -->
					<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
						});
					</script>
	<!-- //Date-Picker-JavaScript -->

	<!-- banner text effect js file -->
			<script src="js/modernizr.custom.72111.js"></script>
	<!-- banner text effect js file -->

<script src="/js/lodash.min.js"></script>
<script src="js/axios.min.js"></script>
<script src="/js/login.js"></script>

<div id="app">
	<div class="modal" tabindex="-1" role="dialog" id="login_modal">
      <div class="wrapper fadeInDown">
        <div id="formContent">

          <!-- Login Form -->
          <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Email">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" value="">
            <input type="submit" class="fadeIn fourth" value="Log In" onclick="login_action(event)">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
			@include ('main')
		<!-- copyright -->
		<div class="copyright-agile">
			<p>&copy; 2020 OnceUponAtime. All rights reserved | Design by <a href="https://www.facebook.com/areen.ibrahim.35/">OnceUponAtime</a></p>
		</div>
		<!-- //copyright -->
</div>

</body>
<!-- //Body -->
</html>
