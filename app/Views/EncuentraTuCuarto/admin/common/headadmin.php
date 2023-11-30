<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EncuentraTuCuarto.mx</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container1 {
      max-width: 600px;
      margin: 50px auto;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    .colornav {
      background-color: #40ACF3;
    }

    .background1 {
      background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Socialist_red_flag.svg/324px-Socialist_red_flag.svg.png');
      background-size: cover;
      color: white;
      /* Ajusta el color del texto para que sea legible */
    }
    .background2 {
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOPrUyLbNEWNBSxsZ34absLR47G8VoPdX2qvhFum9PDA&s');
      background-size: cover;
      color: white;
      /* Ajusta el color del texto para que sea legible */
    }
    .background3 {
      background-image: url('https://us.123rf.com/450wm/claudiodivizia/claudiodivizia1604/claudiodivizia160401639/56021706-papel-de-color-azul-%C3%BAtil-como-una-textura-de-fondo.jpg');
      background-size: cover;
      color: white;
      /* Ajusta el color del texto para que sea legible */
    }
    .background4 {
      background-image: url('https://i.pinimg.com/originals/d7/7d/17/d77d17e44fe53d4b4b4373b3e832e1fb.jpg');
      background-size: cover;
      color: white;
      /* Ajusta el color del texto para que sea legible */
    }
    .background5 {
      background-image: url('https://www.pedroamador.com/wp-content/uploads/2014/01/campana-fondo-amarillo-en-redes-sociales-1200x675.jpg');
      background-size: cover;
      color: black;
      /* Ajusta el color del texto para que sea legible */
    }
    .background6 {
      background-image: url('https://storage.googleapis.com/www-paredro-com/uploads/2014/09/mexican-pink-solid-color-background.jpg');
      background-size: cover;
      color: white;
      /* Ajusta el color del texto para que sea legible */
    }
    .background7 {
      background-image: url('https://tablered.mx.arauco.com/wp-content/uploads/2020/04/Negro.jpg');
      background-size: cover;
      color: white;
      /* Ajusta el color del texto para que sea legible */
    }
  </style>
  <header class="p-2 mb-3 border-bottom colornav">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-4 justify-content-center mb-md-0">
          <li><a href="<?= base_url('EncuentraTuCuarto/admin/inicio') ?>" class="nav-link px-2 link-body-emphasis">Inicio</a></li>
          <li><a href="<?= base_url('EncuentraTuCuarto/admin/vistas/unidades/ver') ?>" class="nav-link px-2 link-body-emphasis">Unidades</a></li>
          <li><a href="<?= base_url('EncuentraTuCuarto/admin/vistas/departamentos/ver') ?>" class="nav-link px-2 link-body-emphasis">Departamentos</a></li>
          <li><a href="<?= base_url('EncuentraTuCuarto/admin/vistas/servicios/ver') ?>" href="#" class="nav-link px-2 link-body-emphasis">Servicios</a></li>
          <li><a href="<?= base_url('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver') ?>" class="nav-link px-2 link-body-emphasis">Servicios Extra</a></li>
          <li><a href="<?= base_url('EncuentraTuCuarto/admin/vistas/users/ver') ?>" class="nav-link px-2 link-body-emphasis">Usuarios</a></li>
          <li><a href="<?= base_url('EncuentraTuCuarto/admin/vistas/usuarios/ver') ?>" class="nav-link px-2 link-body-emphasis">Perfiles</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <!--<input type="search" class="form-control" placeholder="Search..." aria-label="Search">-->
        </form>

        <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('/'); ?>"><i class="bi bi-box-arrow-left"></i> Cerrar Sesión</a>
      </div>
    </div>
  </header>

</head>

<body>