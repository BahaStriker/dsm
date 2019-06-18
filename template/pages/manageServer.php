
<aside class="right-side">
	
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
  <input type="hidden" name="update" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="System Update">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="reboot" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Server Reboot">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apacheinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"value="Install Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apacheversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-warning btn-lg btn-block" value="Apache2 Version">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apachestop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-error btn-lg btn-block" value="Stop Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apache start" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit"  class="btn btn-success btn-lg btn-block" value="Start Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apachestatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Apache2 Status">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apacherestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-warning btn-lg btn-block" value="Restart Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apachereload" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Reload Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apacheenable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enable Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="apachedisable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block btn-lg btn-info" value="Disable Apache2">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="mysqlinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="msqlversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="mysqlstatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Status MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="mysqlstart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-success btn-lg btn-block" value="Start MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="mysqlstop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-error btn-lg btn-block" value="Stop MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="mysqlrestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Restart MySQL">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="nginxinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install nginx">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="nginxversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version nginx">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="nginxstatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Status nginx">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="nginxstart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-success btn-lg btn-block" value="Start nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="nginxstop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-error btn-lg btn-block" value="Stop nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="nginxrestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Restart nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="nginxquit" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-warning btn-lg btn-block" value="Quit nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="nginxreload" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reload nginx">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongoinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongoversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongostatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Status mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongostart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Start mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongostop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Stop mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongorestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Restart mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongoenable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enable mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="mongodisable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Disable mongo">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="nodeinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install node">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="nodeversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version node">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="curlinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install curl">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="curlversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version curl">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="npminstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Install npm">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="npmversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version npm">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="javainstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install java">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="jreversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version JRE">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="jdkversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Version JDK">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="angularinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install angular">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="angularversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version angular">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="gitinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Install git">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="gitversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version git">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="phpinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Install php ">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="phpversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Version php">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="phpmodule" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit"  class="btn btn-primary btn-lg btn-block"value="Module php">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="act1" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="ls">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="act2" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="pwd">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="act3" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="date">
</form><br>
          </div>
<!--//end -->

<!--//end -->
  <div role="tabpanel" class="tab-pane fade" id="tab2">

  <iframe src="http://127.0.0.1:9527/" width="700" height="500" ></iframe> 
 
  </div>
<!--//end -->
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.content -->
</aside><!-- /.right-side -->
