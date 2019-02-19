
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
                    <a class="navbar-brand" href="#">Rekomendasi</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Akun
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('karyawan/updateakun'); ?>">Update Akun</a></li>
                                <li><a href="<?php echo site_url('karyawan/logout'); ?>">Logout</a></li>
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
                                <h4 style="margin-bottom:-15px;" class="title">Rekomendasi Klien</h4>
                                <hr />
                            </div>
                            <div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<th>No</th>
									<th>No Induk</th>
									<th>Nama</th>
									<th>JK</th>
									<th>TTL</th>
									<th>No HP</th>
									<th>Diagnosa</th>
									<th>Rekomendasi</th>									
									<th style="text-align:center;">Aksi</th>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>001/PLA/IV/2015</td>
										<td>Dakota Rice</td>
										<td>Laki-laki</td>
										<td>Bantul, 04-12-2010</td>
										<td>081802654008</td>
										<td>Autis</td>
										<td>SLB</td>
										<td style="text-align:center;">
											<a title="Detail" href="<?php echo site_url('rekomendasi/detail'); ?>" class="pe-7s-look"></a> 
											<!-- &nbsp;&nbsp; 
											<a href="<?php echo site_url('program/edit'); ?>" class="pe-7s-tools"></a> 
											&nbsp;&nbsp; 
											<a href="<?php echo site_url('program/delete'); ?>" class="pe-7s-trash"></a> -->
										</td>
									</tr>
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
		$("#menu6").addClass("active");
	});
</script>