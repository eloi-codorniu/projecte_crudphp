<?php include('connexio_woo.php'); ?>

<!-- ======= Counts Section ======= -->
<section class="counts section-bg">
    <div class="container">
        <div class="row">


            <?php
            $total_products = count(($woocommerce->get('products')));

            ?>

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                <div class="count-box">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="<?php echo $total_products; ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Productes</p>
                </div>
            </div>




            <?php
            $categories = $woocommerce->get('products/categories');

            foreach ($categories as $categoria) {
            ?>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo  $categoria->count; ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p> <?php echo $categoria->name; ?> </p>
                    </div>
                </div>
            <?php
            }
            ?>






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
            <p class="description">Aqui podem actualitzar qualsevol producte.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="servei-esborrar.php">Esborrar</a></h4>
            <p class="description">Aquesta opció ens da la posibilitat d'esborrar productes.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="servei_afegeix.php">Afegir</a></h4>
            <p class="description">Desde aqui podem actualitzar nostres productes.</p>
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