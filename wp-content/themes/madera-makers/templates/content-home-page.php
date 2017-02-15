<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center upside-down">
        <h1 class="text-uppercase">Fabricamos tu mueble a la medida</h1>
        <p><em>En Madera Makers fabricamos, diseñamos y personalizamos cualquier tipo de mobiliario que tengas en mente.</em></p>
        <p class="vertical-separator">
          <a href="#formulario-pedido" class="btn btn-lg btn-primary">Pide tu cotización ahora</a>
        </p>
        <h6 class="text-uppercase">Conoce más</h6>
        <p class="text-left pull-left">© Copyright Madera Makers 2016</p>
        <p class="text-right pull-right"><a class="text-capitalize" href="#">Política de privacidad</a></p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 text-center">
      <h2 class="text-uppercase">¿Cómo funciona?</h2>
      <p class="vertical-separator">Déjanos poner en tus manos el mueble que solo existe en tu cabeza.</p>
    </div>
  </div>
  <div class="row row-sm-same-height">
    <div class="col-sm-3">
      <div class="box-shadow text-center common-box">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/librero.svg" width="75" height="84" alt="Librero Madera Makers" >
        <h6 class="text-uppercase">1. Tu idea</h6>
        <p>Compártenos una foto o la idea del mueble que quieres.</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-shadow text-center common-box">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/escritorio.svg" width="84" height="80" alt="Escritorio Madera Makers" >
        <h6 class="text-uppercase">2. Cotización</h6>
        <p>Obtén tu cotización personalizada en menos de 48 horas.</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-shadow text-center common-box">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/mesa.svg" width="103" height="62" alt="Mesa Madera Makers" >
        <h6 class="text-uppercase">3. Respuesta</h6>
        <p>Pide tu mueble y prepárate para tenerlo.</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-shadow text-center common-box">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/sofa.svg" width="79" height="73" alt="Sofa Madera Makers" >
        <h6 class="text-uppercase">4. Disfruta</h6>
        <p>Recibe tu mueble y disfrútalo.</p>
      </div>
    </div>
  </div>
</div>
<div id="formulario-pedido" class="container">
  <div class="row">
    <div class="col-sm-5">
      <h2 class="text-uppercase">Fabricamos tu mueble a la medida</h2>
      <p>En Madera Makers fabricamos muebles y proyectos de interiorismo a la medida, con los mejores materiales y la más alta calidad.</p>
      <p>Lo hacemos a partir de tu idea o de una propuesta que armemos para ti según tus necesidades.</p>
      <p>Para comenzar a trabajar por favor llena el formulario de la derecha, adjunta cualquier boceto, dibujo, foto o plano que tengas. Si no tienes ninguna imagen, solo describe lo que necesitas y nosotros nos pondremos en contacto contigo para trabajar una propuesta.</p>
      <p>¡Materializa tus ideas <strong>ahora</strong>!</p>
    </div>
    <div class="col-sm-6 col-sm-push-1">
      <div class="panel panel-default">
        <?php
        if(isset($_SERVER['WP_DB_PASSWORD'])){
          echo do_shortcode('[contact-form-7 id="12" title="Envíanos tu idea"]');
        } else {
          echo do_shortcode('[contact-form-7 id="11" title="Envíanos tu idea"]');
        }
        ?>
      </div>
    </div>
  </div>
</div>
