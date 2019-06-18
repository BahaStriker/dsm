<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo strip_tags ( getConfigValue("app_name") ); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="shortcut icon" href="template/assets/icon.png"/>
        <link rel="apple-touch-icon" href="template/assets/icon-large.png"/>
        <link rel="image_src" href="template/assets/icon-large.png"/>
        <link href="template/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
		<link href="template/assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <link href="template/assets/custom.css" rel="stylesheet" type="text/css" />
      
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<style>
  .wellcome_area {
    background-image: url(img/bg-img/welcome-bg.png);
    height: 500px;
    position: relative;
    z-index: 1;
    background-position: bottom center;
    background-size: cover;
}
</style>
<script type="text/javascript">
var count = 6;
var redirect = "?route=home#contact";
 
function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
        count--;
        
        setTimeout("countDown()", 1000);
    }else{
        window.location.href = redirect;
    }
}
</script>
    </head>

  <body class="login-page wellcome_area">
    <div class="login-box">
      <div class="login-logo">
        <?php echo getConfigValue("app_name"); ?>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><?php _e('Sign Up to start your session'); ?></p>
        <?php if(!empty($statusmessage)): ?>
				<div class="row"><div class='col-md-12'><div class="alert alert-<?php print $statusmessage["type"]; ?> alert-auto" role="alert"><?php print $statusmessage["message"]; ?></div></div></div>
		<?php endif; ?>
    <div>

    <ul class="nav nav-tabs block " role="tablist">

<li role="presentation"><a href="#tab1" class ="btn-group btn-group-lg" role="tab" data-toggle="tab">Free</a></li>
<li role="presentation"><a href="#tab2" class ="btn-group btn-group-lg" role="tab" data-toggle="tab">Premium</a></li>
<li role="presentation"><a href="#tab3" class ="btn-group btn-group-lg" role="tab" id ="timer" onclick="countDown()" data-toggle="tab">Enterprise</a></li>

</ul>
</div>


<div class="tab-content"  >

  <div role="tabpanel" class="tab-pane active" id="tab1">
        <form action="?route=register" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="name" class="form-control" placeholder="<?php _e('Username'); ?>" required autofocus/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="<?php _e('Email'); ?>" required autofocus/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" pattern=".{6,}" title="Six or more characters" placeholder="<?php _e('Password'); ?>" min="6" max="12" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <input type="hidden" name="roleid" value="2" >
          <div class="row">
            <div class="col-xs-8">

            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat"><?php _e('Sign UP'); ?></button>
            </div><!-- /.col -->
          </div>
		<input type="hidden" name="signup"/>
        </form>

      </div>
      <div role="tabpanel" class="tab-pane fade" id="tab2">
      <form action="?route=register" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="name" class="form-control" placeholder="<?php _e('Username'); ?>" required autofocus/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="<?php _e('Email'); ?>" required autofocus/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="<?php _e('Password'); ?>" min="6" max="12" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <input type="hidden" name="roleid" value="3" >
          <div class="row">
            <div class="col-xs-8">

            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat"><?php _e('Sign UP'); ?></button>
            </div><!-- /.col -->
          </div>
		<input type="hidden" name="signup"/>
        </form>

      </div>
      <div  role="tabpanel" class="tab-pane fade" id="tab3"  >
      
      <center><img src="template\images\redirect.gif"  height="200" width="200"></center>
      <center><strong>Redirecting to the website Form .</strong></center>
      </div>
      </div>
</div>
<div class="cardbox-footer text-center  text-md"><span class="mr-2">already have an account?</span><a class="text-success" href="?route=signin"><strong><?php _e('signin'); ?></strong></a></div>

    <!-- jQuery -->
    <script src="template/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="template/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

  </body>

  
</html>
