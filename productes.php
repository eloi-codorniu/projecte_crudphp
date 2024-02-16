<?php include('connexio_woo.php'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="section-title">
      <h2>Productes</h2>
      <p>Aquí tens una llista de productes que tenim classificats per categories.</p>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Tot</li>
          <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-web">WEB</li>
          <?php
          $categories = $woocommerce->get('products/categories');
          foreach ($categories as $category) {
            echo '<li data-filter=".filter-' . strtolower($category->slug) . '" >' . $category->name . '</li>';
          }
          ?>
        </ul>
      </div>
    </div>

    <div class="row" id="portfolio-items">
      <?php
      $all_products = $woocommerce->get('products');

      foreach ($all_products as $product) {
        echo '<div class="col-lg-4 col-md-6 portfolio-item filter-'.strtolower($category->slug).'">';
        echo '<div class="portfolio-wrap">';
        echo '<img src="' . $product->images[0]->src . '" class="img-fluid" alt="' . $product->name . '">';
        echo '<div class="portfolio-info">';
        echo '<h4>' . $product->name . '</h4>';
        echo '<p>' . $product->categories[0]->name . '</p>';
        echo '<div class="portfolio-links">';
        echo '<a href="' . $product->images[0]->src . '" data-gallery="portfolioGallery" class="portfolio-lightbox" title="' . $product->name . '"><i class="bi bi-plus"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      ?>

<div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</section><!-- End Our Portfolio Section -->

<!-- <script>
  document.addEventListener("DOMContentLoaded", function() {
    const filters = document.querySelectorAll("#portfolio-flters li.filter-app");
    const portfolioItems = document.querySelectorAll("#portfolio-items .portfolio-item");

    filters.forEach(function(filter) {
      filter.addEventListener("click", function() {
        const selectedFilter = this.getAttribute("data-filter");

        portfolioItems.forEach(function(item) {
          item.style.display = "none";
        });

        if (selectedFilter === "*") {
          portfolioItems.forEach(function(item) {
            item.style.display = "block";
          });
        } else {
          const selectedItems = document.querySelectorAll("#portfolio-items .portfolio-item" + selectedFilter);
          selectedItems.forEach(function(item) {
            item.style.display = "block";
          });
        }

        filters.forEach(function(filter) {
          filter.classList.remove("filter-active");
        });
        this.classList.add("filter-active");
      });
    });
  });
</script> -->
