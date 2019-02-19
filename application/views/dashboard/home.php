<div class="main-panel">
	<nav class="navbar navbar-default navbar-fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Dashboard</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-dashboard"></i> </a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Akun <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo site_url('karyawan/updateakun'); ?>">Update Akun</a>
							</li>
							<li>
								<a href="<?php echo site_url('karyawan/logout'); ?>">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<div class="card" style="min-height:320px;">
						<div class="header">
							<?php
							foreach ($dashboard as $row) {
								$id			  = $row->id;
								$nama_lembaga = $row->nama_lembaga;
								$alamat 	  = $row->alamat;
								$kepala		  = $row->kepala;
								$nip		  = $row->nip;
								$nosk		  = $row->nosk;
							}
							?>
							<center><h4><b><?php echo $nama_lembaga; ?></b></h4></center>
							<center>
								<p class="category">
									<?php echo $alamat; ?>
								</p>
							</center>
							<br />
							<pre style="font-size:16px;">Kepala 	: <?php echo $kepala; ?> <br /><br />NIP 	: <?php $nip; ?><br /><br />No.SK 	: <?php $nosk; ?> </pre>
							<a style="float:right;" class="btn" href="<?php echo site_url('dashboard/edit/' . $id); ?>">Edit</a>
							
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card">
						<div class="header">
							<h4 class="title">Data Klien PLA</h4>
						</div>
						<div class="content">
							<div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

							<div class="footer">
								<div class="legend">
									<i class="fa fa-circle text-info"></i> Open <i class="fa fa-circle text-danger"></i> Bounce <i class="fa fa-circle text-warning"></i> Unsubscribe
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- <div class=""> -->
						<div class="col-md-12" style="padding-bottom:20px;background:#fff;border:1px solid #ddd;-webkit-border-radius:4px;">
							<center><h4><b>REKAPITULASI DATA ANAK PLA D.I.YOGYAKARTA</b></h4></center>
							<br />
							<div class="col-md-offset-4 col-md-4"><h5><center><b><u>Total Klien : </u></b></center></h5></div>
							<br /><br /><br />
							<div class="col-md-offset-2 col-md-3">
								<h5><b>Anak yang terdaftar</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Anak yang tidak mempunyai program</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Anak ASD yang ditangani</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-offset-2 col-md-3">
								<h5><b>Anak non ASD yang ditangani</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Kelas Transisi</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Mengundurkan diri</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-offset-2 col-md-3">
								<h5><b>Tidak Aktif</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Tidak Datang</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Selesai Program</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-offset-2 col-md-3">
								<h5><b>Waiting List Dokter</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Waiting List Psikolog</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
							<div class="col-md-3">
								<h5><b>Waiting List Program</b></h5>
								<div style="margin-bottom:5px;">
									Laki-laki &emsp;&emsp;&ensp;&nbsp;: <br />
									Perempuan &emsp;&nbsp;: <br />
									Jumlah &emsp;&emsp;&emsp;: 
								</div>
							</div>
						</div>
				<!-- </div> -->
			</div>
		</div>
	</div>


<script>
	$(document).ready(function(){

        	demo.initChartist();



    	});

	$(document).ready(function(){
		$("#menu1").addClass("active");
	});
</script>

