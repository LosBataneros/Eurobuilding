<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

		<title> <?php echo APP_TITLE; ?></title>
    <link rel="icon" type="image/png" href="<?php echo $frontend; ?>vistas/assets/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo $frontend; ?>vistas/assets/font-awesome/css/fontawesome-all.min.css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo $frontend; ?>vistas/assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $frontend; ?>vistas/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo $frontend; ?>vistas/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo $frontend; ?>vistas/assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo $frontend; ?>vistas/assets/css/style.css" rel="stylesheet">

</head>

<body class="login-page item-slick1" style="background-image: url(<?php echo $frontend; ?>vistas/assets/images/fondo.jpg); height:763px;">

  <div class="login-box">
    <div class="logo">
      <a href="login"> Administración <br> <b>Portal de planillas</b></a><br>
      <small><?php echo APP_COPY ?> </small>
    </div>
    <div class="card">
      <div class="body">
        <form method="POST">
          <div class="msg">
            <h4>Iniciar Sesión</h4>
          </div>
          <hr>
          <div class="input-group">
            <span class="input-group-addon">
            <i class="fas fa-user" style="font-size:25px;"></i>
            </span>
            <div class="form-line">
              <input type="text" class="form-control" name="ingUser" placeholder="Usuario" autocomplete="off" required>
            </div>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon">
            <i class="fas fa-lock" style="font-size:25px;"></i>
            </span>
            <div class="form-line">
              <input type="password" class="form-control" name="ingPassword" placeholder="Password" autocomplete="off" required>
            </div>
          </div>
          <div class="row">

            <?php

              $login = new ControladorUsuarios();
              $login -> ctrIngresoUsuario();

              ?>

            <div class="col-xs-6 col-md-offset-3">
              <center>
                <button class="btn btn-block bg-red waves-effect" type="submit">Ingresar</button>
              </center>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <!-- Jquery Core Js -->
  <script src="<?php echo $frontend; ?>vistas/assets/plugins/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="<?php echo $frontend; ?>vistas/assets/plugins/bootstrap/dist/js/bootstrap.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="<?php echo $frontend; ?>vistas/assets/plugins/node-waves/waves.js"></script>

  <!-- Validation Plugin Js -->
  <script src="<?php echo $frontend; ?>vistas/assets/plugins/jquery-validation/jquery.validate.js"></script>

  <!-- Custom Js -->
  <script src="<?php echo $frontend; ?>vistas/assets/js/admin.js"></script>
</body>
</html>
