<?php include('head.php'); ?>

<body class="<?= 's_'.SECCION ?>" id="homes">

<header class="cabecera" id="home">
    <div class="cont-1300">
      <div class="logo">
         
          <a href="<?=url('home')?>" class="cabecera__logo anim-suave text-left">
             <img src="images/home/logo.png" alt="<?= Config::obtener('empresa')->nombre ?>">  
          </a>        
        </div>

        <div class="let">
          <nav class="nav-principal">
            <ul>
            
              <li><a href="#homes" >Home </a></li>
              <li><a href="#somos">Quienes somos </a></li>
              <li><a href="#estilo">Nuestro estilo</a></li>
              <li><a href="#gallery">Galeria</a></li>
              <li><a href="#contacto">Contacte</a></li>
              
            </ul>
          </nav>

          
        </div>
        <div class="nav-mobile">
           <button class="hamburger hamburger--efecto visible-xs">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
         
    </div>
</header>

<main>