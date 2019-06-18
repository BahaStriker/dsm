<aside class="right-side">
	<!-- Content Header (Page header) -->
	<style>
	.boxsizingBorder {
		width:100%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		margin-top: 40px;
		margin-bottom: 20px;
}
</style>
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
    <?php
	if(isset($_GET['submit'])) {
        $id = trim($_GET['id']);
        $ip=$server['name'];
        $port=22;
        $user=$server['username'];
        $pass=$server['password'];
    }
    if (isset ($_GET["update"])){
    $cmd="apt-get update -y" ;
  }
  elseif (isset ($_GET["reboot"])){
    $cmd="reboot" ;
  }
  //apache2
  elseif (isset ($_GET["apacheinstall"])){
	 $title="Installing Apache2...";
    $cmd="apt-get install apache2 -y" ;
  }
  elseif (isset ($_GET["apacheversion"])){
	  $title="Apache2 Version";
    $cmd="apache2 -v" ;
  }
  elseif (isset ($_GET["apachestatus"])){
	  $title="Apache2 Status";
    $cmd="systemctl status apache2" ;
  }
  elseif (isset ($_GET["apachestart"])){
	  $title="Starting Apache2...";
    $cmd="systemctl start apache2.service" ;
  }
  elseif (isset ($_GET["apachestop"])){
	  $title="Stopping Apache2...";
    $cmd="systemctl stop apache2.service" ;
  }
  elseif (isset ($_GET["apacherestart"])){
	  $title="Restarting Apache2...";
    $cmd="systemctl restart apache2" ;
  }
  elseif (isset ($_GET["apachereload"])){
	  $title="Reloading Apache2...";
    $cmd="systemctl reload apache2" ;
  }
  elseif (isset ($_GET["apacheenable"])){
	  $title="Enabling Apache2...";
    $cmd="systemctl enable apache2" ;
  }
  elseif (isset ($_GET["apachedisable"])){
	  $title="Disabling Apache2...";
    $cmd="systemctl disable apache2" ;
  }
  //mysql
  elseif (isset ($_GET["mysqlinstall"])){
	  $title="Installing MySQL...";
    $cmd="date" ;
  }
  elseif (isset ($_GET["mysqlversion"])){
	  $title="MySQL Version";
    $cmd="mysql -V" ;
  }
  elseif (isset ($_GET["mysqlstatus"])){
	  $title="MySQL Status";
    $cmd="systemctl status mysql.service" ;
  }
  elseif (isset ($_GET["mysqlstart"])){
	  $title="Starting MySQL...";
    $cmd="systemctl start mysql" ;
  }
  elseif (isset ($_GET["mysqlstop"])){
	  $title="Stopping MySQL...";
    $cmd="systemctl stop mysql" ;
  }
  elseif (isset ($_GET["mysqlrestart"])){
	  $title="Restarting MySQL...";
    $cmd="systemctl restart mysql" ;
  }
  //nginx
  elseif (isset ($_GET["nginxinstall"])){
	  $title="Installing nginx...";
    $cmd="apt-get install nginx -y" ;
  }
  elseif (isset ($_GET["nginxversion"])){
	  $title="nginx Version";
    $cmd="nginx -V" ;
  }
  elseif (isset ($_GET["nginxstatus"])){
	  $title="nginx Status";
    $cmd="systemctl status nginx" ;
  }
  elseif (isset ($_GET["nginxstart"])){
	  $title="Starting nginx...";
    $cmd="systemctl start nginx" ;
  }
  elseif (isset ($_GET["nginxstop"])){
	  $title="Stopping nginx...";
    $cmd="systemctl stop nginx" ;
  }
  elseif (isset ($_GET["nginxrestart"])){
	  $title="Restarting nginx...";
    $cmd="systemctl restart nginx" ;
  }
  elseif (isset ($_GET["nginxreload"])){
	  $title="Reloading nginx...";
    $cmd="systemctl reload nginx" ;
  }
  elseif (isset ($_GET["nginxquit"])){
	  $title="Quitting nginx...";
    $cmd="systemctl quit nginx" ;
  }
  //mongo
  elseif (isset ($_GET["mongoinstall"])){
	  $title="Installing MogoDB...";
    $cmd="apt-get install -y mongodb" ;
  }
  elseif (isset ($_GET["mongoversion"])){
	  $title="MongoDB Version";
    $cmd="mongod --version" ;
  }
  elseif (isset ($_GET["mongostatus"])){
	  $title="MongoDB Status";
    $cmd="systemctl status mongodb" ;
  }
  elseif (isset ($_GET["mongostart"])){
	  $title="Starting MogoDB...";
    $cmd="systemctl start mongodb" ;
  }
  elseif (isset ($_GET["mongostop"])){
	  $title="Stopping MogoDB...";
    $cmd="systemctl stop mongodb" ;
  }
  elseif (isset ($_GET["mongorestart"])){
	  $title="Restarting MogoDB...";
    $cmd="systemctl restart mongodb" ;
  }
  elseif (isset ($_GET["mongoenable"])){
	  $title="Enabling MogoDB...";
    $cmd="systemctl enable mongodb" ;
  }
  elseif (isset ($_GET["mongodisable"])){
	  $title="Disabling MogoDB...";
    $cmd="systemctl disable mongodb" ;
  }
  //node
  elseif (isset ($_GET["nodeinstall"])){
	  $title="Installing NodeJS...";
    $cmd="apt-get install nodejs -y" ;
  }
  elseif (isset ($_GET["nodeversion"])){
	  $title="NodeJS Version";
    $cmd="node -v" ;
  }
  //curl
  elseif (isset ($_GET["curlinstall"])){
	  $title="Installing cURL...";
    $cmd="apt-get install curl -y" ;
  }
  elseif (isset ($_GET["curlversion"])){
	  $title="cURL Version";
    $cmd="curl -v" ;
  }
  //npm
  elseif (isset ($_GET["npminstall"])){
	  $title="Installing NPM...";
    $cmd="apt-get install npm -y" ;
  }
  elseif (isset ($_GET["npmversion"])){
	  $title="NPM Version";
    $cmd="npm -v" ;
  }
  //java
  elseif (isset ($_GET["javainstall"])){
	  $title="Installing JAVA...";
    $cmd="apt-get install default-jre default-jdk -y" ;
  }
  elseif (isset ($_GET["jreversion"])){
	  $title="Java Version";
    $cmd="java -version" ;
  }
  elseif (isset ($_GET["jdkversion"])){
	  $title="JDK Version";
    $cmd="javac -version" ;
  }
  //angular
  elseif (isset ($_GET["angularinstall"])){
	  $title="Installing Angular...";
    $cmd="npm install -g @angular/cli" ;
  }
  elseif (isset ($_GET["angularversion"])){
	  $title="Angular Version";
    $cmd="ng version" ;
  }
  //git
  elseif (isset ($_GET["gitinstall"])){
	  $title="Installing Git...";
    $cmd="apt-get install git -y" ;
  }
  elseif (isset ($_GET["gitversion"])){
	  $title="Git Version";
    $cmd="git --version" ;
  }
  //php
  elseif (isset ($_GET["phpinstall"])){
	  $title="Installing PHP...";
    $cmd="apt-get install php php-curl php-cli php-mysql php-gd php-pear php-dev php-mbstring php-zip php-xml libapache2-mod-php -y" ;
  }
  elseif (isset ($_GET["phpversion"])){
	  $title="PHP Version";
    $cmd="php -v" ;
  }
  elseif (isset ($_GET["phpmodule"])){
	  $title="PHP Modules";
    $cmd="php -m" ;
  }
  elseif (isset ($_GET["act1"])){
	  $title="ls";
    $cmd="ls" ;
  }
  elseif (isset ($_GET["act2"])){
	  $title="pwd";
    $cmd="pwd" ;
  }
  elseif (isset ($_GET["act3"])){
	  $title="Server Date";
    $cmd="date" ;
  }
  
    $connection = ssh2_connect($ip,$port);
    ssh2_auth_password($connection,$user, $pass);
    $shell=ssh2_shell($connection, 'terminal');
    $stream = ssh2_exec($connection, $cmd);
    stream_set_blocking($stream, true);
    $out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
    ?>
<h3 style="text-align: center;"><?=$title?> </h3>
<pre><textarea class="boxsizingBorder" rows="5" readonly> <?php  echo " ". stream_get_contents($out); ?> </textarea></pre>

<script type="text/javascript" language="javascript">
	window.setTimeout( function() {
    $("textarea").height( $("textarea")[0].scrollHeight );
}, 1);
</script>
	</section><!-- /.content -->
</aside><!-- /.right-side -->
