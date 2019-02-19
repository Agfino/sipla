<div class="login-page">
	<center>
	<?php
	echo validation_errors();
	?>
	</center>
  <div class="form">
  	<center style="font-family:Verdana;text-shadow:2px 2px #a4a4a4;"><h2><font style="color:red;">A</font><font style="color:#FFFF00;">u</font><font style="color:green;">t</font><font style="color:magenta;">i</font><font style="color:cyan;">s</font> 
  	 <font style="color:blue;">C</font><font style="color:#00B8FF;">e</font><font style="color:#FF0071;">n</font><font style="color:#FF6004;">t</font><font style="color:#54FF06;">e</font><font style="color:#0DFFC6;">r</font></h2></center>
  	
  	<img src="<?php echo base_url('assets/img/login/logo.jpg'); ?>" alt="logo PLA" class="img-circle" style="width:100px;height:120px;" />
  	<br />
    <form action="" method="post" class="login-form">
      <input class="form-control" autofocus="autofocus" type="text" value="<?php echo set_value('username'); ?>" name="username" placeholder="Username" />
      <input class="form-control" autofocus="autofocus" type="password" value="<?php echo set_value('password'); ?>" name="password" placeholder="Password" />
      <button type="submit" name="login" value="1">login</button>
    </form>
  </div>
</div>	