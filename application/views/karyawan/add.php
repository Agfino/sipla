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
				<a class="navbar-brand" href="#">Karyawan</a>
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
							<span class="title" style="font-size:24px;">Tambah Karyawan</span>
							<p class="category">
								Tambah Karyawan PLA
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<form accept-charset="utf-8" action="" method="post">
						<div class="col-md-offset-3 col-md-6">
							<label>Nama</label>
							<input type="text" value="<?php echo set_value('name'); ?>" class="form-group form-control" name="name">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Tempat, Tanggal Lahir</label>
							<input type="text" value="<?php echo set_value('ttl'); ?>" class="form-group form-control" name="ttl">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Jenis Kelamin</label>
							<!-- <input type="text" value="<?php echo set_value('jk'); ?>" class="form-group form-control" name="jk"> -->
							<select class="form-control" style="width:200px;">
								<option value="<?php echo set_value('jk'); ?>">  -  </option>
								<option value="<?php echo set_value('jk'); ?>"> Laki-laki</option>
								<option value="<?php echo set_value('jk'); ?>"> Perempuan </option>
							</select>	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<br />
							<label>Agama</label>
							<input type="text" value="<?php echo set_value('agama'); ?>" class="form-group form-control" name="agama">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Alamat</label>
							<textarea class="form-group form-control" name="alamat"><?php echo set_value('alamat'); ?></textarea>	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Tanggal Masuk</label>
							<input type="date" value="<?php echo set_value('tgl_msk'); ?>" class="form-group form-control" name="tgl_msk" placeholder="yyyy-mm-dd">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Jabatan</label>
							<input type="text" value="<?php echo set_value('jabatan'); ?>" class="form-group form-control" name="jabatan">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Username</label>
							<input type="text" value="<?php echo set_value('username'); ?>" class="form-group form-control" name="username">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Password</label>
							<input type="text" value="<?php echo set_value('password'); ?>" class="form-group form-control" name="password">	
						</div>
						<div class="form-group col-md-offset-3 col-md-6">
					        <label>Password Confirmation</label>
					        <input type="text" value="<?php echo set_value('password_confirmation'); ?>" name="password_confirmation" class="form-control" />
					    </div>
						<div style="margin-bottom:20px;" class="col-md-offset-3 col-md-6">
							<label>Status</label> <br />
							<input type="checkbox" name="status" value="1"> Aktif <br />							
							<input type="checkbox" name="status" value="0"> Tidak Aktif
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
		$("#menu4").addClass("active");
	});
</script>