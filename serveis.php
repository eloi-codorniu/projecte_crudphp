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
            // Otro tipo de categoría
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
