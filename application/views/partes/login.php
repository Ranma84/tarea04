<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />          
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= site_url('asset/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
          <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
         <!-- Theme style -->
         <link rel="stylesheet" href="<?= site_url('asset/css/AdminLTE.min.css');?>">
        
         <!-- iCheck -->
  <link rel="stylesheet" href="<?= site_url('asset/plugins/iCheck/square/blue.css');?>">
        <title>Login</title>
          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>
    <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicia sesión para iniciar tu sesión</p>

    <?= form_open('Login/login'); ?>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
        <?= form_error('email'); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
        <?= form_error('password'); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
          </div>
        <!-- /.col -->
      </div>
      <div class="col-xs-12">
      <?= $this->session->flashdata('login_error'); ?>
      </div>  
      <?= form_close(); ?>
    <!-- /.social-auth-links -->
    <a href="<?= base_url('Login/registrar'); ?>" class="text-center">Registrar una nueva membresía</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="<?= site_url('asset/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?= site_url('asset/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?= site_url('asset/plugins/iCheck/icheck.min.js');?>"></script>
        
        <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
        </body>
</html>