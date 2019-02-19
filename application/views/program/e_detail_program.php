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
							<span class="title" style="font-size:24px;">Edit Program Klien</span>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<form action="" method="post">
						<h4 style="margin-left:15px;"><b>A. KETERANGAN PRIBADI</b></h4>
						<div class="col-md-6">
							<label>No Induk</label>
							<input type="text" class="form-group form-control" name="noinduk" value="">	
						</div>
						<div class="col-md-6">
							<label>Nama Lengkap</label>
							<input type="text" class="form-group form-control" name="name" value="">	
						</div>
						<div class="col-md-6">
							<label>Nama Panggilan</label>
							<input type="text" class="form-group form-control" name="name" value="">	
						</div>
						<div class="col-md-6">
							<label>JK</label>
							<select class="form-control">
								<option value="">-</option>
								<option>Laki-laki</option>
								<option>Perempuan</option>
							</select>	
						</div>
						<div style="clear:both;" class="col-md-6">
							<label>TTL</label>
							<input type="text" class="form-group form-control" name="agama" value="">	
						</div>
						<div class="col-md-6">
							<label>Kewarganegaraan</label>
							<input type="text" class="form-group form-control" name="jabatan" value="">
						</div>
						<div class="col-md-6">
							<label>Anak Keberapa</label>
							<input type="text" class="form-group form-control" name="jabatan" value="">	
						</div>
						<div class="col-md-6">
							<label>Jumlah Saudara kandung</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Jumlah Saudara Tiri</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Jumlah Saudara Angkat</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Bahasa Sehari-hari</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
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
						
						<h4 style="clear:both;margin-left:15px;"><b>B. KETERANGAN TEMPAT TINGGAL</b></h4>
						
						<div class="col-md-6">
							<label>Alamat</label>
							<input type="text" class="form-group form-control" name="password" value="">	
						</div>
						<div class="col-md-6">
							<label>No Telp/HP</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Jarak Rumah Dari PLA</label>
							<input type="text" class="form-group form-control" name="username" value="">
						</div>
						<div class="col-md-6">
							<label>Transportasi yang digunakan</label>
							<input type="text" class="form-group form-control" name="username" value="">
						</div>
						
						<h4 style="margin-left:15px;"><b>C. KETERANGAN KESEHATAN</b></h4>
						
						<div class="col-md-6">
							<label>Diagnosa</label>
							<input type="text" class="form-group form-control" name="password" value="">	
						</div>
						<div class="col-md-6">
							<label>Golongan Darah</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Penyakit yang pernah diderita</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Tinggi dan Berat badan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						
						<h4 style="margin-left:15px;"><b>D. KETERANGAN PENDIDIKAN DAN TERAPI</b></h4>
						
						<div class="col-md-6">
							<label>Alamat Sekolah</label>
							<input type="text" class="form-group form-control" name="password" value="">	
						</div>
						<div class="col-md-6">
							<label>Alamat Terapi</label>
							<input type="text" placeholder="Sebelumnya" class="form-group form-control" name="username" value="">
							<input type="text" placeholder="Tempat lain" class="form-group form-control" name="username" value="">	
						</div>
						
						<h4 style="margin-left:15px;"><b>E. KETERANGAN ORANG TUA KANDUNG</b></h4>
						<div class="col-md-12">
							<label style="font-weight:bold;font-size:18px;text-decoration:underline;">AYAH</label>
						</div>
						<div class="col-md-6">
							<label>Nama</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Tempat Tgl Lahir</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Agama</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Kewarganegaraan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Alamat</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>No. HP</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Pendidikan Terakhir</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Pekerjaan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6 col-md-offset-6">
							<label>Masih hidup/meninggal dunia</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						
							<div class="col-md-12">
							<label style="font-weight:bold;font-size:18px;text-decoration:underline;">IBU</label>
						</div>
						<div class="col-md-6">
							<label>Nama</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Tempat Tgl Lahir</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Agama</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Kewarganegaraan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Alamat</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>No. HP</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Pendidikan Terakhir</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Pekerjaan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6 col-md-offset-6">
							<label>Masih hidup/meninggal dunia</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						
							<div class="col-md-12">
							<label style="font-weight:bold;font-size:18px;text-decoration:underline;">ORANGTUA WALI</label>
						</div>
						<div class="col-md-6">
							<label>Nama</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Tempat Tgl Lahir</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Agama</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Kewarganegaraan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Alamat</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>No. HP</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Pendidikan Terakhir</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Pekerjaan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6 col-md-offset-6">
							<label>Masih hidup/meninggal dunia</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						
						<h4 style="margin-left:15px;"><b>F. KETERANGAN PERKEMBANGAN ANAK</b></h4>
						
						<div class="col-md-6">
							<label>Diagnosa</label>
							<input type="text" class="form-group form-control" name="password" value="">	
						</div>
						<div class="col-md-6">
							<label>Golongan Darah</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Penyakit yang pernah diderita</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						<div class="col-md-6">
							<label>Tinggi dan Berat badan</label>
							<input type="text" class="form-group form-control" name="username" value="">	
						</div>
						
						<h4 style="margin-left:15px;"><b>G. KETERANGAN PROGRAM</b></h4>
						<div class="col-md-offset-1 col-md-10">
							<div class="content table-responsive table-full-width">
								<table class="table table-hover table-bordered table-striped">
									<thead>
										<tr>
											<th>KETERANGAN PERTEMUAN</th>
											<th style="width: 450px;">KETERANGAN JADWAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Bertemu Dokter Tumbuh Kembang</td>
											<td><br />
												1. <input class="table-program form-control" type="text" name="" /><br />
												2. <input class="table-program form-control" type="text" name="" /><br />
												3. <input class="table-program form-control" type="text" name="" /><br />
												4. <input class="table-program form-control" type="text" name="" /><br />
												5. <input class="table-program form-control" type="text" name="" />
											</td>
										</tr>
										<tr>
											<td>Bertemu Psikolog</td>
											<td><br />
												1. <input class="table-program form-control" type="text" name="" /><br />
												2. <input class="table-program form-control" type="text" name="" /><br />
												3. <input class="table-program form-control" type="text" name="" /><br />
												4. <input class="table-program form-control" type="text" name="" /><br />
												5. <input class="table-program form-control" type="text" name="" />
											</td>
										</tr>
										<tr>
											<td>Assesment Awal</td>
											<td><input class="form-table-program" type="text" name="" /> s/d <input class="form-table-program" type="text" name="" /></td>
										</tr>
										<tr>
											<td>Program 3 Bulan Pertama</td>
											<td><input class="form-table-program" type="text" name="" /> s/d <input class="form-table-program" type="text" name="" /></td>
										</tr>
										<tr>
											<td>Program 3 Bulan Kedua</td>
											<td><input class="form-table-program" type="text" name="" /> s/d <input class="form-table-program" type="text" name="" /></td>
										</tr>
										<tr>
											<td>Transisi</td>
											<td><input class="form-table-program" type="text" name="" /> s/d <input class="form-table-program" type="text" name="" /></td>
										</tr>
										<tr>
											<td>Penerimaan Laporan & Rekomendasi</td>
											<td><br />
												Tgl <input style="width:403px;margin-left:22px;" class="table-program form-control" type="text" name="" /><br />
												Ket <textarea class="form-control" style="height:250px;"></textarea>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-offset-4">
									<button type="submit" name="save" class="btn btn-primary col-md-6">Save</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script>
	$(document).ready(function(){
		$("#menu5").addClass("active");
	});
</script>