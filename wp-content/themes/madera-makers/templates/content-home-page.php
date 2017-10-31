<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center upside-down">
        <h1 class="text-uppercase">Fabricamos tu mobiliario a medida</h1>
        <p><em>En Madera Makers fabricamos y personalizamos cualquier tipo de proyecto en carpintería que tengas en mente.</em></p>
        <p class="vertical-separator">
          <a href="#formulario-pedido" class="btn btn-lg btn-primary">Pide tu cotización ahora</a>
        </p>
        <h6 class="text-uppercase">Conoce más</h6>
        <p class="text-left pull-left">© Copyright Madera Makers 2017</p>
        <p class="text-right pull-right"><a class="text-capitalize" href="/politica-de-privacidad">Política de privacidad</a></p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 text-center">
      <h2 class="text-uppercase">¿Cómo funciona?</h2>
      <p class="vertical-separator font-size-medium">Ponemos en tus manos el mueble que tienes en tu cabeza.</p>
    </div>
  </div>
  <div class="row">
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
<div class="container-fluid overflow-hidden">
  <div id="formulario-pedido" class="container">
  <div class="row">
    <div class="col-xs-12 text-center">
      <h2 class="text-uppercase vertical-separator">Fabricamos tu mueble a la medida</h2>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default box-shadow">
        <?php
        if(isset($_SERVER['WP_DB_PASSWORD'])){
          echo do_shortcode('[contact-form-7 id="6" title="Envíanos tu idea"]');
        } else {
          echo do_shortcode('[contact-form-7 id="11" title="Envíanos tu idea"]');
        }
        ?>
      </div>
    </div>
    <div class="col-sm-5 col-sm-push-1">
      <p>En Madera Makers fabricamos muebles y proyectos de interiorismo a la medida, con los mejores materiales y la más alta calidad.</p>
      <p>Lo hacemos a partir de tu idea o de una propuesta que armemos para ti según tus necesidades.</p>
      <p>Para comenzar a trabajar por favor llena el formulario de la derecha, adjunta cualquier boceto, dibujo, foto o plano que tengas. Si no tienes ninguna imagen, solo describe lo que necesitas y nosotros nos pondremos en contacto contigo para trabajar una propuesta.</p>
      <p>¡Materializa tus ideas <strong>ahora</strong>!</p>
      <p class="vertical-separator vertical-separator-over">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/detalle-formulario.jpg" alt="">
      </p>
    </div>
  </div>
</div>
</div>
<div class="container-fluid">
  <div class="row margin-bottom-medium">
    <div class="col-xs-12 text-center">
      <h2 class="text-uppercase vertical-separator">Conoce algunos de nuestros proyectos</h2>
    </div>
    <div class="col-sm-4">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-square-1to1-01.jpg" alt="" width="398" height="398">
    </div>
    <div class="col-sm-8">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-rectangle-16to9-01.jpg" width="826" height="398">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <div class="row margin-bottom-medium">
        <div class="col-sm-12">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-rectangle-4to3-01.jpg" alt="" width="826" height="592">
        </div>
      </div>
      <div class="row margin-bottom-medium">
        <div class="col-sm-12">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-rectangle-16to9-02.jpg" alt="" width="826" height="398">
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row margin-bottom-medium">
        <div class="col-sm-12">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-square-1to1-02.jpg" alt="" width="398" height="398">
        </div>
      </div>
      <div class="row margin-bottom-medium">
        <div class="col-sm-12">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-rectangle-16to9-03.jpg" alt="" width="398" height="592">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-rectangle-4to3-02.jpg" alt="" width="612" height="398">
    </div>
    <div class="col-sm-6">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-rectangle-4to3-03.jpg" alt="" width="612" height="398">
    </div>
  </div>
</div>
