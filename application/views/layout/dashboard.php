<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>SIPLA</title>

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />

		<!-- Bootstrap core CSS     -->
		<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" />

		<!-- Animation library for notifications   -->
		<link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet"/>

		<!--  Light Bootstrap Table core CSS    -->
		<link href="<?php echo base_url(); ?>/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

		<!--  CSS for Demo Purpose, don't include it in your project     -->
		<link href="<?php echo base_url(); ?>/assets/css/demo.css" rel="stylesheet" />

		<!--     Fonts and icons     -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

		<!-- JS -->
		<script src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<!-- End of JS-->
		<script>
			function printDiv(elementId) {
			    var a = document.getElementById('printing-css').value;
			    var b = document.getElementById(elementId).innerHTML;
			    window.frames["print_frame"].document.title = document.title;
			    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
			    window.frames["print_frame"].window.focus();
			    window.frames["print_frame"].window.print();
			}
		</script>
		<style>
			/*.nav .dropdown{
				display:none;
			}*/
		</style>
	</head>
	<body>

		<div class="wrapper">
			<div class="sidebar" data-color="azure" data-image="<?php echo base_url(); ?>assets/img/sidebar-5.jpg" style="position: fixed;">

				<!--

				Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
				Tip 2: you can also add an image using data-image tag

				-->
				
				<div class="sidebar-wrapper">
					<div class="logo">
						<a href="<?php echo site_url('dashboard'); ?>" class="simple-text"> PLA YOGYAKARTA </a>
					</div>

					<ul class="nav">
						<li id="menu1">
							<a href="<?php echo site_url('dashboard'); ?>"> <i class="pe-7s-graph"></i>
							<p>
								Dashboard
							</p> </a>
						</li>
						<li id="menu2">
							<a href="<?php echo site_url('sarpras'); ?>"> <i class="pe-7s-note2"></i>
							<p>
								Sarpras
							</p> </a>
						</li>
						<li id="menu3" class="dropdown">
							<a href="<?php echo site_url('klien/all'); ?>"> <i class="pe-7s-users"></i>
							<p>
								Klien 
							</p>
							<a class="dropdown-toggle" data-toggle="dropdown" href=""><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo site_url('klien/keteranganklien') ?>">Keterangan Klien </a>
								</li>
							</ul> 
							</a>
							
						</li>
						<li id="menu4">
							<a href="<?php echo site_url('karyawan/all'); ?>"> <i class="pe-7s-user"></i>
							<p>
								Karyawan
							</p> </a>
						</li>
						<li id="menu5">
							<a href="<?php echo site_url('program/all'); ?>"> <i class="pe-7s-science"></i>
							<p>
								Program
							</p> </a>
						</li>
						<li id="menu6">
							<a href="<?php echo site_url('rekomendasi/all'); ?>"> <i class="pe-7s-bell"></i>
							<p>
								Rekomendasi
							</p> </a>
						</li>
					</ul>
				</div>
			</div>
						
			<!--Content-->
			<?php echo $yield; ?>
			<!--End of Content-->
			<!---->
			<footer class="footer">
				<div class="container-fluid">
					<p class="copyright pull-left">
						&copy; 2018 <a href="http://www.pusatlayananautisdiy.com" target="blank1">Pusat Layanan Autis D.I.Yogyakarta</a>
					</p>
					<p class="copyright pull-right">
						Designed and Built By <a href="http://www.facebook.com/aguswidyantaka" target="blank2">Admin IT PLA</a>
					</p>
				</div>
			</footer>

		</div>
		<!---->
	</body>

	<!--   Core JS Files   -->
	<script>
		$('.nav li > .dropdown').parent().hover(function() {
			var submenu = $(this).children('.sub-menu');
			if ( $(submenu).is(':hidden') ) {
			  $(submenu).slideDown(200);
			} else {
			  $(submenu).slideUp(200);
			}
		});
	</script>

	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url(); ?>/assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url(); ?>/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>

	<script type="text/javascript"></script>

</html>
