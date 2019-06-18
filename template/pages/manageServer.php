<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1><?php echo $server['name']; ?><small> <?php echo smartDate($latest['timestamp']); ?></small></h1>
		<ol class="breadcrumb">
            <li><a href="?route=dashboard"><i class="fa fa-dashboard"></i> <?php _e('Home'); ?></a></li>
            <li><a href="?route=servers"><?php _e('Servers'); ?></a></li>
            <li class="active"><?php echo $server['name']; ?></li>
        </ol>
	</section>
	<!-- Main content -->
	<section class="content">
		
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
                    <div class="box-body">
                    <div id="page-wrap">
     <ul class="nav nav-tabs" role="tablist">
  
  <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">installation</a></li>
  <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">terminal</a></li>
</ul>
</div>
     <div class="tab-content"  >
          <div role="tabpanel" class="tab-pane fade active in" id="tab1">
          <textarea rows="5" cols="120" style="margin-top: 40px;margin-bottom: 20px;"></textarea>

</textarea>
<form action="#" method="get">
	<input type="hidden" name="route" value="excecute">
	<input type="hidden" name="update" value="1">
	<input type="hidden" name="submit" value="1">
	<input type="hidden" name="id" value="<?=$_GET['id']?>">
	<input type="submit" class="btn btn-primary btn-lg btn-block" value="System Update">
</form>
<br>
<form action="#" method="get">
	<input type="hidden" name="route" value="excecute">
	<input type="hidden" name="reboot" value="1">
	<input type="hidden" name="submit" value="1">
	<input type="hidden" name="id" value="<?=$_GET['id']?>">
	<input type="submit" class="btn btn-primary btn-lg btn-block" value="Server Reboot">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apacheinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"value="Install Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apacheversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-warning btn-lg btn-block" value="Apache2 Version">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apachestop" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-error btn-lg btn-block" value="Stop Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apachestart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit"  class="btn btn-success btn-lg btn-block" value="Start Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apachestatus" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Apache2 Status">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apacherestart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-warning btn-lg btn-block" value="Restart Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apachereload" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Reload Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apacheenable" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enable Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="apachedisable" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block btn-lg btn-info" value="Disable Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mysqlinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="msqlversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mysqlstatus" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Status MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mysqlstart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-success btn-lg btn-block" value="Start MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mysqlstop" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-error btn-lg btn-block" value="Stop MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mysqlrestart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Restart MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install nginx">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version nginx">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxstatus" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Status nginx">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxstart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-success btn-lg btn-block" value="Start nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxstop" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-error btn-lg btn-block" value="Stop nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxrestart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Restart nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxquit" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-warning btn-lg btn-block" value="Quit nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nginxreload" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reload nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongoinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongoversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongostatus" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Status mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongostart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Start mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongostop" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Stop mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongorestart" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Restart mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongoenable" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enable mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="mongodisable" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Disable mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nodeinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install node">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="nodeversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version node">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="curlinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install curl">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="curlversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version curl">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="npminstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Install npm">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="npmversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version npm">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="javainstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install java">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="jreversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version JRE">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="jdkversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Version JDK">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="angularinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install angular">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="angularversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version angular">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="gitinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Install git">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="gitversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version git">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="phpinstall" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install PHP">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="phpversion" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version PHP">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="phpmodule" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit"  class="btn btn-primary btn-lg btn-block"value="Module php">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="act1" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="ls">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="act2" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="pwd">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="route" value="excecute">
  <input type="hidden" name="act3" value="1">
  <input type="hidden" name="submit" value="1">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="date">
</form><br>
          </div>
<!--//end -->

<!--//end -->
  <div role="tabpanel" class="tab-pane fade" id="tab2">

  <iframe src="http://54.37.136.213:9527" width="100%" height="500" ></iframe> 
 
  </div>
<!--//end -->
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.content -->
</aside><!-- /.right-side -->
