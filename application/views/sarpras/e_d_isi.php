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
				<a class="navbar-brand" href="#">Sarpras</a>
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
								<a href="<?php echo site_url('sarpras/logout'); ?>">Logout</a>
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
							<span class="title" style="font-size:24px;">Data Sarpras PLA DIY</span>
							<p class="category">
								Edit Detail Sarpras
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<form action="" method="post">
						<div class="col-md-offset-3 col-md-6">
							<label>Nama Barang</label>
							<input type="text" class="form-group form-control" name="" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Jumlah</label>
							<input type="text" class="form-group form-control" name="" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Satuan</label>
							<input type="text" class="form-group form-control" name="" value="">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Kondisi</label>
							<input type="text" class="form-group form-control" name="" value="">	
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
		$("#menu2").addClass("active");
	});
</script>