<?php include('connexio_woo.php'); ?> 

<!-- ======= Counts Section ======= -->
<section class="counts section-bg">
  <div class="container">

    <div class="row">

      <?php
      // Obtener el número total de productos
      $total_products = count($woocommerce->get('products'));

      // Obtener el número de productos en cada categoría
      $categories = $woocommerce->get('products/categories');
      $num_processors = 0;
      $num_rams = 0;
      $num_graphics_cards = 0;

      foreach ($categories as $category) {
        switch ($category->name) {
          case 'Processadors':
            $num_processors = count($woocommerce->get('products', ['category' => $category->slug]));
            break;
          case 'Ram':
            $num_rams = count($woocommerce->get('products', ['category' => $category->slug]));
            break;
          case 'Gràfiques':
            $num_graphics_cards = count($woocommerce->get('products', ['category' => $category->slug]));
            break;
          default:
            break;
        }
      }
      ?>

      <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
        <div class="count-box">
          <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $total_products; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Productes</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
        <div class="count-box">
          <i class="bi bi-document-folder" style="color: #c042ff;"></i>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $num_processors; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Processadors</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="count-box">
          <i class="bi bi-live-support" style="color: #46d1ff;"></i>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $num_rams; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>RAM's</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
        <div class="count-box">
          <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $num_graphics_cards; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Tarjetes gràfiques</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->





<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Serveis</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
            <h4 class="title"><a href="servei_actualitzar.php">Actualitzar</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="servei_esborrar.php">Esborrar</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">Afegir</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <!-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar2-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->
