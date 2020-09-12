
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Fresh Food a Hotel Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fresh Food a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

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
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/toastr.min.css">
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

<style>
.tables {
  margin: 20px;
  padding: 20px;
}

.booking {
  margin: 20px;
  padding: 20px;
  background: url("/images/bg.jpg");
  background-repeat: repeat;
}

.rest-image:hover {
  transform: scale(1.2);
}
</style>

</head>

<!-- Body -->
<body>
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

	<script src="/js/vue.js"></script>
	<script src="/js/lodash.min.js"></script>
	<script src="/js/flatpickr.js"></script>
	<script src="/js/axios.min.js"></script>
	<script src="/js/login.js"></script>
	<script src="js/toastr.min.js"></script>
	<script src="/js/vm.js"></script>
<!-- banner -->
<div id="app">
	@verbatim
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container-fluid">
					<div class="header-left">
						<div class="w3layouts-logo grid__item">
							<h1>
								<a class="link link--ilin" href="/"><span>Fresh</span><span>Food</span></a>
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
									<li><a href="/#about" class="scroll">About</a></li>
									<li><a href="/#services" class="scroll">Services</a></li>
									<li><a href="/#chefs" class="scroll">Chefs</a></li>
									<li><a href="/#gallery" class="scroll">Gallery</a></li>
									<li><a href="/#customer" class="scroll">Customers</a></li>
									<li><a href="/#contact" class="scroll">Contact</a></li>
								</ul>

					<div class="clearfix"> </div>
							</div>
						</nav>
						<div class="agileinfo-social-grids">
							<button v-if="login==false" class="btn btn-primary" type="button" name="button" onclick="login()">Login</button>
							<div v-if="login==true">
								<button class="btn btn-primary" type="button" name="button" onclick="logout()">Logout</button>
							</div>
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
			</div>
		</div>
	</div>
<!-- //banner -->



	<div class="modal" tabindex="-1" role="dialog" id="login_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 v-if="login==true" class="modal-title">Login</h5>
					<h5 v-if="login==false" class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#booking_modal').hide()">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div v-if="login==false" class="form-group">
							<label required for="name">Name</label>
							<input type="text" id="name" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label required for="login">Email</label>
							<input type="text" id="login" class="form-control" name="login" placeholder="Email">
						</div>
						<div class="form-group">
							<label required for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" placeholder="Password">
						</div>
						<div v-if="login==false" class="form-group">
							<label required for="c_password">Confirm Password</label>
							<input type="password" id="c_password" class="form-control" name="c_password" placeholder="Confirm Password">
						</div>
            <input v-if="login==true" type="submit" class="btn btn-primary" value="Log In" onclick="login_action(event)">
						<input v-if="login==false" type="submit" class="btn btn-primary" value="Log In" onclick="show_login(event)">
						<input v-if="login==true" type="submit" class="btn btn-primary" value="Register" onclick="show_register(event)">
						<input v-if="login==false" type="submit" class="btn btn-primary" value="Register" onclick="register_action(event)">
          </form>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#login_modal').hide()">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="booking">
      <div class="modal" tabindex="-1" role="dialog" id="booking_modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">New Booking</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#booking_modal').hide()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label required for="mobile">Mobile</label>
                  <input type="tel" class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter Mobile Number">
                  <small id="mobileHelp" class="form-text text-muted">We'll never share your mobile with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="number">Number of guests</label>
                  <input required type="number" class="form-control" id="number" placeholder="Number of guests">
                </div>
                <div class="form-group" v-if="dates.length==0">
                  <label for="arrival">Date of arrival</label>
                  <input required type="text" class="form-control" id="arrival" placeholder="Date of arrival">
                </div>
                <div class="form-group" v-else>
                  <label for="arrival">Date of arrival</label>
                  <select class="form-control" id="arrival">
                    <option v-for="date in dates">{{ date }}</option>
                  </select>
                </div>
                <input type="hidden" :value="table" id="table"></input>
                <button type="submit" class="btn btn-primary" onclick="make_booking(event)">Submit</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#booking_modal').hide()">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div v-for="tables in groupedTables" class="row tables">
        <div v-for="table in tables" class="col-sm-4">
          <rest-table :name="table.name" :position="table.position.name" :count="table.count" :img-url="table.image" :booking_count="table.booking_count"></rest-table>
        </div>
      </div>
    </div>
    @endverbatim

		<!-- copyright -->
		<div class="copyright-agile">
			<p>&copy;  2020 OnceUponAtime. All rights reserved | Design by <a href="https://www.facebook.com/areen.ibrahim.35/">OnceUponAtime</a></p>
		</div>
		<!-- //copyright -->
</div>

</body>
<!-- //Body -->
</html>
