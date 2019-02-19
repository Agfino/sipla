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
								<a href="<?php echo site_url('karyawan/updateakun'); ?>">Update Profil</a>
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
				<div class="col-md-8">
					<div class="card" style="min-height:620px;">
						<div class="header">
							<?php  
							// print_r($user);
								foreach ($user as $data){								
							?>
							<form action="" method="post">
							    <div class="form-group col-md-offset-2 col-md-8">
							        <label>Nama Lembaga</label>
							        <input type="text" name="nama_lembaga" value="<?php echo set_value('nama_lembaga', $data->nama_lembaga); ?>" class="form-group form-control" />
							    </div>
							    <div class="form-group col-md-offset-2 col-md-8">
							        <label>Alamat</label>
									<textarea name="alamat" class="form-control form-group"></textarea>
							    </div>
							    <div class="form-group col-md-offset-2 col-md-8">
							        <label>Kepala</label>
							        <input type="text" name="kepala" value="<?php echo set_value('kepala', $data->kepala); ?>" class="form-group form-control" />
							    </div>
							    <div class="form-group col-md-offset-2 col-md-8">
							        <label>NIP</label>
							        <input type="text" name="nip" value="<?php echo set_value('nip', $data->nip); ?>" class="form-group form-control" />
							    </div>
							    <div class="form-group col-md-offset-2 col-md-8">
							        <label>No. SK</label>
							        <input type="text" name="nosk" value="<?php echo set_value('nosk', $data->nosk); ?>" class="form-group form-control" />
							    </div>
							    <div class="form-group col-md-offset-5 col-md-9">
							        <button class="btn btn-primary" type="submit" name="save" value="1">Update</button>
							    </div>
							</form>
							<?php  
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<script>
	$(document).ready(function(){
		$("#menu1").addClass("active");
	});
</script>


