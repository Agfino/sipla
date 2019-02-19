
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
                            <div class="col-md-12">
                                <h4 style="margin-top:10px;margin-bottom:-10px;">Data Sarana Prasarana</h4> 
                                <hr />
                            </div>
                            <div style="margin-top:0px;" class="col-md-12">
                            	<button style="float:right;position:relative;margin-top:-10px;"><a href="<?php echo site_url('sarpras/add') ?>">Tambah</a></button>
                            	<input style="float:left;position:relative;margin-top:-10px;margin-bottom:10px;padding:4px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;" type="text" class="" placeholder="keyword..." />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    	<th>No</th>
                                        <th>Ruang</th>
                                    	<th>Luas</th>
                                    	<th>Kondisi</th>
                                    	<th>Isi</th>
                                    	<th style="text-align:center;">Aksi</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Snoselen</td>
                                        	<td>4x6</td>
                                        	<td><a href="<?php echo site_url('sarpras/kondisi'); ?>">Detail</a></td>
                                        	<td><a href="<?php echo site_url('sarpras/isi') ?>">Detail</a></td>
											<td style="text-align:center;"><a href="<?php echo site_url('sarpras/edit'); ?>" class="pe-7s-tools"></a> &nbsp;&nbsp; <a href="<?php echo site_url('') ?>" class="pe-7s-trash"></a></td>
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
		$("#menu2").addClass("active");
	});
</script>