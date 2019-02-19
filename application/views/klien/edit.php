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
				<a class="navbar-brand" href="#">Klien</a>
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
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<span class="title" style="font-size:24px;">Edit Klien</span>
							<p class="category">
								Edit Data Klien PLA
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<form action="" method="post">
						<div class="col-md-offset-3 col-md-6">
							<label>No Induk</label>
							<input type="text" class="form-group form-control" name="noinduk" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Nama</label>
							<input type="text" class="form-group form-control" name="name" value="">	
						</div>
						<div style="margin-bottom:20px;" class="col-md-offset-3 col-md-6">
							<label>Jenis Kelamin</label>
							<br />
							<select class="form-control" style="width:200px;">
								<option value="">  -  </option>
								<option value="Laki-laki"> Laki-laki</option>
								<option value="Perempuan"> Perempuan </option>
							</select>	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Tempat, Tanggal Lahir</label>
							<input type="text" class="form-group form-control" name="ttl" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Nama Ortu</label>
							<input type="text" class="form-group form-control" name="namaortu" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>No HP</label>
							<input type="text" class="form-group form-control" name="nohp" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Alamat</label>
							<textarea class="form-group form-control" name="alamat"></textarea>	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Inisial Kabupaten <small style="color:#A4A4A4;font-size:8.5px;font-family:calibri;font-style:italic;">(Tulis Huruf depannya dengan KAPITAL, ex: Kulon Progo menjadi KP, Sleman menjadi S, L untuk Luar Kota)</small></label>
							<input type="text" class="form-group form-control" name="ikab" placeholder="B / S / KP / GK / L untuk Luar Kota" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Kabupaten</label>
							<input type="text" class="form-group form-control" name="kabupaten" placeholder="Nama Kabupaten" value="">	
						</div>
						<div style="margin-bottom:20px;" class="col-md-offset-3 col-md-6">
							<label>Diagnosa <small style="color:#A4A4A4;font-size:8.5px;font-family:calibri;font-style:italic;">(Awali dengan huruf Kapital disetiap kata, bila lebih dari satu pisahkan dengan tanda koma (,) dan ditambah spasi)</small></label> <br />
							<textarea class="form-group form-control" name="diagnosa" placeholder="Non Autis, Speech Delay, DLL"></textarea>
						</div>
						<div style="margin-bottom:20px;" class="col-md-offset-3 col-md-6">
							<label>Psikolog</label> <br />
							<textarea class="form-group form-control" name="Psikolog"></textarea>
						</div>
						<div style="margin-bottom:50px;" class="col-md-offset-3 col-md-6">
							<label>Keterangan</label>
							<select class="form-control">
								<option value="">-</option>
								<option>Selesai Program</option>
								<option>Waiting list Dokter Tumbang</option>
								<option>Waiting list Psikolog</option>
								<option>Waiting list Program</option>
								<option>Dalam Program</option>
								<option>Transisi</option>
								<option>Mengundurkan diri</option>
								<option>Tidak ada Program</option>
								<option>Tidak Datang</option>
							</select>
						</div>
						<div class="col-md-offset-4">
							<button type="submit" name="save" class="btn btn-primary col-md-6">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script>
	$(document).ready(function(){
		$("#menu3").addClass("active");
	});
</script>