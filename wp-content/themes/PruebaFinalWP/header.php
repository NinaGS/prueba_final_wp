<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
	 <!--barra de navegación-->
      <nav class="navbar navbar-expand-xl navbar-light fixed-top">
      <div class="container">
        <img class="img-fluid logo-ilfontidimodena" src="<?php echo get_template_directory_uri(); ?>/assets/img/marca/logo.png">
        <a class="navbar-brand" href="index.html"><img src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-collapse" aria-controls="menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="menu-collapse">
          <div class="navbar-links">
            <ul class="navbar-nav">
              <li class="dropdown nav-item">
                <a  class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Carta<b class="caret"></b></a>
                      <ul class="dropdown dropdown-menu">
                          <li><a class="dropdown-item" href="#sec-antipastos">Antipastos</a></li>
                          <li><a class="dropdown-item" href="#sec-ensaladas">Ensaladas</a></li>
                          <li><a class="dropdown-item" href="#sec-sopas">Sopas</a></li>
                          <li><a class="dropdown-item" href="#sec-pizza-tradicional">Pizza tradicional</a></li>
                          <li><a class="dropdown-item" href="#sec-pizzas">Pizzas</a></li>
                          <li><a class="dropdown-item" href="#sec-postres">Postres</a></li>
                          <li><a class="dropdown-item" href="#sec-infusiones">Infusiones</a></li>
                          <li><a class="dropdown-item" href="#sec-bebidas">Bebidas</a></li>
                      </ul>

              </li>

              <li class="nav-item">
                <a class="nav-link contacto" href="#contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
            </ul>
          </div>
        </div>

<!--cierre barra de navegación-->
   <!-- LOGO -->

      </nav>
</div>


<!-- cierre LOGO -->