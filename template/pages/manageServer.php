
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
          <textarea rows="4" cols="50">

</textarea>
<form action="#" method="get">
  <input type="hidden" name="update" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="update system">
</form>
<br>
<form action="#" method="get">
  <input type="hidden" name="reboot" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="reboot server">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="apacheinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary"value="install apache">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="apacheversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version apache">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="apachestop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="stop apache">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="apache start" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit"  class="btn btn-primary" value="start apache">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="apachestatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" class="btn btn-primary" value="status apache">
</form><br>
<form action="#" method="get">
  <input type="hidden" name="apacherestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="restart apache">
</form>
<form action="#" method="get">
  <input type="hidden" name="apachereload" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="reload apache">
</form>
<form action="#" method="get">
  <input type="hidden" name="apacheenable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="enable apache">
</form>
<form action="#" method="get">
  <input type="hidden" name="apachedisable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="disable apache">
</form>
<form action="#" method="get">
  <input type="hidden" name="mysqlinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install mysql">
</form>
<form action="#" method="get">
  <input type="hidden" name="msqlversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version mysql">
</form>
<form action="#" method="get">
  <input type="hidden" name="mysqlstatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="status mysql">
</form>
<form action="#" method="get">
  <input type="hidden" name="mysqlstart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="start mysql">
</form>
<form action="#" method="get">
  <input type="hidden" name="mysqlstop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="stop mysql">
</form>
<form action="#" method="get">
  <input type="hidden" name="mysqlrestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="restart mysql">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxstatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="status nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxstart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="start nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxstop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="stop nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxrestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="restart nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxquit" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="quit nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="nginxreload" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="reload nginx">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongoinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongoversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongostatus" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="status mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongostart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="start mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongostop" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="stop mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongorestart" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="restart mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongoenable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="enable mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="mongodisable" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="disable mongo">
</form>
<form action="#" method="get">
  <input type="hidden" name="nodeinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install node">
</form>
<form action="#" method="get">
  <input type="hidden" name="nodeversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version node">
</form>
<form action="#" method="get">
  <input type="hidden" name="curlinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install curl">
</form>
<form action="#" method="get">
  <input type="hidden" name="curlversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version curl">
</form>
<form action="#" method="get">
  <input type="hidden" name="npminstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary"  value="install npm">
</form>
<form action="#" method="get">
  <input type="hidden" name="npmversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version npm">
</form>
<form action="#" method="get">
  <input type="hidden" name="javainstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install java">
</form>
<form action="#" method="get">
  <input type="hidden" name="jreversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version JRE">
</form>
<form action="#" method="get">
  <input type="hidden" name="jdkversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary"  value="version JDK">
</form>
<form action="#" method="get">
  <input type="hidden" name="angularinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install angular">
</form>
<form action="#" method="get">
  <input type="hidden" name="angularversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version angular">
</form>
<form action="#" method="get">
  <input type="hidden" name="gitinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary"  value="install git">
</form>
<form action="#" method="get">
  <input type="hidden" name="gitversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version git">
</form>
<form action="#" method="get">
  <input type="hidden" name="phpinstall" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="install php ">
</form>
<form action="#" method="get">
  <input type="hidden" name="phpversion" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="version php">
</form>
<form action="#" method="get">
  <input type="hidden" name="phpmodule" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit"  class="btn btn-primary"value="module php">
</form>
<form action="#" method="get">
  <input type="hidden" name="act1" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="ls">
</form>
<form action="#" method="get">
  <input type="hidden" name="act2" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="pwd">
</form>
<form action="#" method="get">
  <input type="hidden" name="act3" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" class="btn btn-primary" value="date">
</form>
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
