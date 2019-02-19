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
							<span class="title" style="font-size:24px;">Update Akun</span>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<form action="" method="post">
						<div class="col-md-offset-3 col-md-6">
							<label>Nama</label>
							<input type="text" class="form-group form-control" name="name" value="<?php //echo set_value('name',$user->name); ?>">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Tempat, Tanggal Lahir</label>
							<input type="text" class="form-group form-control" name="ttl" value="<?php //echo set_value('ttl',$user->ttl); ?>">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>JK</label>
							<input type="text" class="form-group form-control" name="jk" value="<?php //echo set_value('jk',$user->jk); ?>">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Agama</label>
							<input type="text" class="form-group form-control" name="agama" value="<?php //echo set_value('agama',$user->agama); ?>">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Alamat</label>
							<textarea class="form-group form-control" name="alamat"><?php //echo set_value('alamat', $user->alamat); ?></textarea>	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Tanggal Masuk</label>
							<input type="text" class="form-group form-control" name="tgl_msk" value="<?php //echo set_value('tgl_msk', $user->tgl_msk); ?>">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Jabatan</label>
							<input type="text" class="form-group form-control" name="jabatan" value="<?php //echo set_value('jabatan', $user->jabatan); ?>">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Username</label>
							<input type="text" class="form-group form-control" name="username" value="<?php //echo set_value('username', $user->username); ?>">	
						</div>
						<div class="col-md-offset-3 col-md-6">
							<label>Password</label>
							<input type="text" class="form-group form-control" name="password" value="<?php //echo set_value('password'); ?>">	
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
	// $(document).ready(function(){
		// $("#menu4").addClass("active");
	// });
</script>