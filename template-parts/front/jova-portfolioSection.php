<!-- ###################### -->
  <!-- Section portfolio start -->
  <!-- ###################### -->
  <section class="bg-primary pt-5 pb-5">
    <div class="container pb-5 text-light">
      <div class="row justify-content-center text-center">
        <div class="col-10">
          <?php if ($args['portfolio_section_data']['jova_portfolio_icon'] !== ""): ?>
            <img src="<?php esc_attr_e($args['portfolio_section_data']['jova_portfolio_icon']); ?>" alt="Portfolio section icon">
          <?php endif; ?>
          <h1>
            <?php
              esc_html_e($args['portfolio_section_data']['jova_portfolio_mainTitle']);
            ?>
          </h1>
        </div>
      </div>
      <?php
      $jova_porfolio_args = array(
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' => 4
      );
      $jova_porfolio_posts = new WP_Query( $jova_porfolio_args );

      ?>


      <?php if ($jova_porfolio_posts->have_posts()) : ?>
        <div class="row justify-content-center mt-3">

      	<?php while ($jova_porfolio_posts->have_posts()) : $jova_porfolio_posts->the_post(); ?>

            <div class="col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 mt-4">
              <div class="card border-0 portfolio-card bg-dark text-white">
                <img class="card-img" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="<?php echo the_title() . " image" ?>">
                <div class="card-img-overlay p-0 d-flex flex-column justify-content-end">
                  <div class="bg-primary p-3 shadow">
                    <a class="text-light" href="<?php esc_attr_e(get_permalink(get_the_ID())); ?>"><h2 class="card-title"><?php the_title(); ?></h2></a>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </div>
            </div>

      	<?php endwhile; ?>

      </div>

      <div class="row justify-content-center mt-5 pt-3 text-center">
        <div class="col-12">
          <a class="btn btn-light" href="<?php esc_attr_e(get_post_type_archive_link( 'portfolio' )); ?>"><h3>See all portfolio</h3></a>
        </div>
      </div>
      <?php endif;
      wp_reset_postdata();
      ?>
    </div>
  </section>
  <!-- ###################### -->
  <!-- Section portfolio end -->
  <!-- ###################### -->
