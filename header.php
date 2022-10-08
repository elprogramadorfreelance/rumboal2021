<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
		

	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
		<?php wp_head(); ?>
	</head>

	<body>

	
	<header class="header2020"><!--inicio nuevo header 2020-->

    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>

  

    <div class="headerSitio2020"><!--header sitio-->
      <div class="navBars2020"><span class="nV2020"><i class="fas fa-bars"></i></span><img src="<?php bloginfo('template_url'); ?>/assets/images/logoRumbo2021.png"></div>
      <div class="categoriasHeader2020">
        <span><a href="#">Federal</a><strong>l</strong></span>
        <span><a href="#">CDMX</a><strong>l</strong></span>
        <span><a href="#">Estados</a></span>
      </div>
      <div class="buscMobile2020">
        <span><i class="fas fa-search"></i></span>
      </div>
      <div class="buscador2020">
        <div class="envolventeMobile"><!--solo se ve en mobile-->
              <form>
                <input type="text">
                <button><i class="fas fa-search"></i></button>
              </form>
              <div class="cerrarBuscadorMobile2020">
              <i class="far fa-times-circle"></i>
            </div>
        </div><!--solo se ve en mobile-->
      </div>


      <div class="menuCategorias2020"><!--menu categorias-->
          <div class="swipe">
              <button id="slideLeft" type="button"><i class="fas fa-angle-left"></i></button>
          </div>
          <div class="catBarra2020" id="container">
            <span><a href="#">Federal</a></span>
            <span><a href="#">CDMX</a></span>
            <span><a href="#">Estados</a></span>
            <span><a href="#">Cámaras</a></span>
            <span><a href="#">Opinión</a></span>
          </div>
          <div class="swipe">
            <button id="slideRight" type="button"><i class="fas fa-angle-right"></i></button>
          </div>
          <div class="linTapar"></div>
      </div><!--menu categorias-->

    </div><!--header sitio-->

     <div class="menuDesplegado animated slideInDown"><!--menu desplegado-->
  <div class="closeNavBars"><i class="fas fa-times"></i></div>
  <div class="container-fluid menuDes">
  
    <nav>
      <div class="col-md-12 menuCat ">
        <ul>
          <li><strong><a href="#">Federal</a></strong></li>
          <li><strong><a href="#">CDMX</a></strong></li>
          <li><strong><a href="#">Estados</a></strong></li>
          <li><strong><a href="#">Cámaras</a></strong></li>
          <li><strong><a href="#">Opinión</a></strong></li>
        </ul>
      </div>   
    </nav>
  </div>
  <div class="barraRedes">
    <span class="rS face">
      <a href="#"><i class="fab fa-facebook"></i></a>
    </span> 
    <span class="rS twit">
      <a href="#"><i class="fab fa-twitter-square"></i></a>
    </span>
    <span class="rS insta">
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </span>
    <span class="rS yt">
      <a href="#"><i class="fab fa-youtube"></i></a>
    </span>
    <span class="rS yt">
      <a href="#"><i class="fab fa-instagram"></i></a>
    </span>
  </div>

</div><!--menu desplegado-->

<!--este modulo va arriba de dond abre class="menuDesplegado-->

  </header><!--fin nuevo header 2020-->

