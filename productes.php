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

          <?php
          $categories = $woocommerce->get('products/categories');
          foreach ($categories as $category) {
            echo '<li data-filter=".' . strtolower($category->slug) . '" class="filter-app">' . $category->name . '</li>';
          }
          ?>
          
        </ul>
      </div>
    </div>

    <div class="row" id="portfolio-items">
      <?php
      if (isset($_GET['category'])) {
        $category_slug = $_GET['category'];
        $products = $woocommerce->get('products', ['category' => $category_slug]);
      } else {
        $products = $woocommerce->get('products');
      }

      foreach ($products as $product) {
        echo '<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">';
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
    </div>
  </div>
</section><!-- End Our Portfolio Section -->

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const filters = document.querySelectorAll("#portfolio-flters li");
    const portfolioItems = document.querySelectorAll("#portfolio-items .portfolio-item");

    filters.forEach(function(filter) {
      filter.addEventListener("click", function() {
        const selectedFilter = this.getAttribute("data-filter");

        portfolioItems.forEach(function(item) {
          item.style.display = "none";
          if (item.classList.contains(selectedFilter) || selectedFilter === "*") {
            item.style.display = "block";
          }
        });

        filters.forEach(function(filter) {
          filter.classList.remove("filter-active");
        });
        this.classList.add("filter-active");
      });
    });
  });
</script>
