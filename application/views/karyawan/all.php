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
						<div class="header col-md-12">
							<h4 style="margin-top:10px;margin-bottom:-10px;">Data Karyawan</h4>
							<hr />		
						</div>
						<div class="col-md-12">
                            <button style="float:right;position:relative;margin-top:-10px;"><a href="<?php echo site_url('karyawan/add'); ?>">Tambah</a></button>
                            <input style="float:left;position:relative;margin-top:-10px;margin-bottom:10px;padding:4px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;" type="text" class="" placeholder="keyword..." />
                         </div>
						<?php 
							echo $this->session->flashdata('notif');
						?>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<th>No</th>
									<th>Nama</th>
									<th>TTL</th>
									<th>JK</th>
									<th>Agama</th>
									<th>Alamat</th>
									<th>Tgl Masuk</th>
									<th>Jabatan</th>
									<th>Status</th>
									<th style="text-align:center;">Aksi</th>
								</thead>
								<tbody>
									<?php 
										$no=1;
										foreach ($users as $user) {
										?>
									<tr>
										<td><?php echo $no; ?>.</td>
										<td><?php echo $user->name; ?></td>
										<td><?php echo $user->ttl; ?></td>
										<td><?php echo $user->jk; ?></td>
										<td><?php echo $user->agama; ?></td>
										<td><?php echo $user->alamat; ?></td>
										<td><?php echo $user->tgl_msk; ?></td>
										<td><?php echo $user->jabatan;  ?></td>
										<td><?php echo $user->status; ?></td>
										<td style="text-align:center;width:65px;">
											<a title="Edit" href="<?php echo site_url('karyawan/edit/'. $user->id); ?>" class="pe-7s-tools"></a> 
											&nbsp;&nbsp; 
											<a title="Delete" href="<?php echo site_url('karyawan/remove/'.$user->id); ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="pe-7s-trash"></a>
										</td>
									</tr>
										<?php 
										$no++;
										} 
									?>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
	$(document).ready(function(){
		$("#menu4").addClass("active");
	});
</script>