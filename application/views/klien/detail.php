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
							<span class="title" style="font-size:24px;">Detail Klien</span>
							<p class="category">
								
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-offset-1 col-md-10">
					<form action="" method="post">
						<div class="col-md-6">
							<label>No Induk</label>
							<input type="text" class="form-group form-control" name="name" readonly="readonly" value="">	
						</div>
						<div class="col-md-6">
							<label>Nama</label>
							<input type="text" class="form-group form-control" name="name" readonly="readonly" value="">	
						</div>
						<div class="col-md-6">
							<label>Jenis Kelamin</label>
							<br />
							<select disabled="disabled" class="form-control" style="width:200px;">
								<option value="">  -  </option>
								<option value="Laki-laki"> Laki-laki</option>
								<option value="Perempuan"> Perempuan </option>
							</select>	
						</div>
						<div class="col-md-6">
							<label>Tempat, Tanggal Lahir</label>
							<input type="text" class="form-group form-control" name="ttl" readonly="readonly" value="">	
						</div>
						<div class="col-md-6">
							<label>Nama Ayah</label>
							<input type="text" class="form-group form-control" name="jabatan" readonly="readonly" value="">	
						</div>
						<div class="col-md-6">
							<label>No Telp</label>
							<input type="text" class="form-group form-control" name="notelp" readonly="readonly" value="">	
						</div>
						<div class="col-md-6">
							<label>Psikolog</label>
							<input type="text" class="form-group form-control" name="psikolog" readonly="readonly" value="">	
						</div>
						<div class="col-md-6">
							<label>Kabupaten</label>
							<input type="text" class="form-group form-control" name="agama" readonly="readonly" value="">	
						</div>
						<div class="col-md-6">
							<label>Diagnosa</label> <br />
							<textarea class="form-group form-control" name="diagnosa" readonly="readonly"></textarea>
						</div>
						<div class="col-md-6">
							<label>Alamat</label>
							<textarea class="form-group form-control" name="alamat" readonly="readonly"></textarea>	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Keterangan</label>
							<input type="text" class="form-group form-control" name="keterangan"readonly="readonly" value="">	
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