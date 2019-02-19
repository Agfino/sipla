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
						<div class="col-md-12">
							<h4 style="margin-top:10px;margin-bottom:-10px;">Data Klien</h4>
							<hr />
						</div>
						<div class="header col-md-5">
							<button style="float:left;position:relative;margin-top:-25px;margin-right:0px;" type="file"><a href="">Browse</a></button>
							<input style="float:left;position:relative;margin-top:5px;margin-bottom:10px;margin-left:-63px;padding:4px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;" type="text" name="browse" placeholder="Nama file" />
							&nbsp;<button style="margin-top:7px;"><a href="#">Import</a></button>
						</div>
						 <div style="margin-top:40px;float:right;" class="col-md-5">
                            <button style="float:right;position:relative;margin-top:-50px;margin-right:0px;" type="submit"><a href="<?php echo site_url('klien/add'); ?>">Tambah</a></button><br />
                            <input style="float:right;position:relative;margin-top:-40px;margin-bottom:0px;padding:4px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;" type="text" class="" placeholder="Search" />
                         </div>
						<div class="content table-responsive table-full-width">
							<div id="print-tabel" class="print-area" style="">
								<table class="table table-hover table-striped border">
									<thead>
										<tr>
											<th>No</th>
											<th>No Induk</th>
											<th>Nama</th>
											<th>JK</th>
											<th>TTL</th>
											<th>No HP</th>
											<th>Diagnosa</th>
											<th>Keterangan</th>
											<th style="text-align:center;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>001/PLA/IV/2015</td>
											<td>Dakota Rice</td>
											<td>Laki-laki</td>
											<td>Bantul, 04-12-2010</td>
											<td>081931246123</td>
											<td>Autis</td>
											<td>Waiting Program</td>
											<td style="text-align:center;">
												<a href="<?php echo site_url('klien/detail'); ?>" title="Detail" class="pe-7s-look"></a> 
												&nbsp;&nbsp; 
												<a href="<?php echo site_url('klien/edit'); ?>" title="Edit" class="pe-7s-tools"></a> 
												&nbsp;&nbsp; 
												<a href="<?php echo site_url('klien/delete'); ?>" title="Delete" class="pe-7s-trash"></a>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>001/PLA/IV/2015</td>
											<td>Dakota Rice</td>
											<td>Laki-laki</td>
											<td>Bantul, 04-12-2010</td>
											<td>081931246123</td>
											<td>Autis</td>
											<td>Waiting Program</td>
											<td style="text-align:center;">
												<a href="<?php echo site_url('klien/detail'); ?>" title="Detail" class="pe-7s-look"></a> 
												&nbsp;&nbsp; 
												<a href="<?php echo site_url('klien/edit'); ?>" title="Edit" class="pe-7s-tools"></a> 
												&nbsp;&nbsp; 
												<a href="<?php echo site_url('klien/delete'); ?>" title="Delete" class="pe-7s-trash"></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div style="text-align:right;">
								<button style=""><a href="#">Export</a></button>
								<button style="margin:14px;"><a class="no-print" href="javascript:printDiv('print-tabel');">Print</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<textarea id="printing-css" style="display:none;">thead,tbody,th,td{border:1px solid #ccc;}table{border:1px solid #ccc;}</textarea>
	<!-- <textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea> -->
	<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script>
	$(document).ready(function(){
		$("#menu3").addClass("active");
	});
</script>