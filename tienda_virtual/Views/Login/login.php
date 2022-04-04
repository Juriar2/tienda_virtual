<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="store coza">
    <meta name="theme-color" content="#2091F9">
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
  
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/wickedcss.min.css">

    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
  
    <section class="material-half-bg">
 
      <div class=""></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <!----sele mdifico en la tipografia--------->
        <h1 class="wiggle"><?= $data['page_title']; ?></h1>
      </div>
      <div class="login-box">
        <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
        <form class="login-form" name="formLogin" id="formLogin" action="">
          <h3 class="login-head  barrelRoll ">Iniciar sesion</h3>
          <div class="form-group">
            <label class="control-label ">Correo Elctronico</label>
            <input id="txtEmail" name="txtEmail" class="form-control floater" type="email" placeholder="Ingrese su correo elctronico" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Contraseña</label>
            <input id="txtPassword" name="txtPassword" class="form-control  floater" type="password" placeholder=" Ingrese su Contraseña">
          </div>
          <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">¿Olvidaste tu contraseña?</a></p>
            </div>
          </div>
          <div id="alertLogin" class="text-center"></div>
          <div class="form-group btn-container">
            <!----sele mdifico el boton--------->
            <button type="submit" class="button slideDown">iniciar sesion</button>
          </div>
        </form>
        <form id="formRecetPass" name="formRecetPass" class="forget-form" action="">
          <h3 class="login-head">¿Olvidaste contraseña?</h3>
          <div class="form-group">
            <label class="control-label">Correo Electronico</label>
            <input id="txtEmailReset" name="txtEmailReset" class="form-control floater" type="email" placeholder="Ingrese su correo para su recuperacion">
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="button  ">Recuperar contraseña</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip">Iniciar sesión</a></p>
          </div>
        </form>
      </div>
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>