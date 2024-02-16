<!-- Portfolio Section -->


<?php include('connexio_woo.php'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="section-title">
      <h2>Our Portfolio</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Tot</li>
          <li data-filter=".filter-app">Processadors</li>
          <li data-filter=".filter-card">Ram</li>
          <li data-filter=".filter-web">Gràfiques</li>
        </ul>
      </div>
    </div>

    <div class="row">
      <?php
      include('connexio_woo.php');
      $productes = $woocommerce->get('products');
      foreach ($productes as $producte) {
        echo '<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item filter-app">';
        echo '<div class="portfolio-wrap">';
        echo '<img src="' . $producte->images[0]->src . '" class="img-fluid" alt="' . $producte->name . '">';
        echo '<div class="portfolio-info">';
        echo '<h4>' . $producte->name . '</h4>';
        echo '<p>' . $producte->categories[0]->name . '</p>';
        echo '<div class="portfolio-links">';
        echo '<a href="' . $producte->images[0]->src . '" data-gallery="portfolioGallery" class="portfolio-lightbox" title="' . $producte->name . '"><i class="bi bi-plus"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section><!-- End Our Portfolio Section -->
