<!-- ###################### -->
  <!-- Section testimonials start -->
  <!-- ###################### -->
  <section class="bg-primary pt-5 pb-5">
    <div class="container">
      <div class="row justify-content-center text-center text-light">
        <div class="col-10">
          <?php if ($args['testimonial_section_data']['jova_testimonial_icon'] !== ""): ?>
            <img src="<?php esc_attr_e($args['testimonial_section_data']['jova_testimonial_icon']); ?>" alt="Testimonial section icon">
          <?php endif; ?>
          <h1>
            <?php
              esc_html_e($args['testimonial_section_data']['jova_testimonial_mainTitle']);
            ?>
          </h1>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <?php
          $jova_testimonial_args = array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'posts_per_page' => 6
          );
          $jova_testimonial_msg = new WP_Query( $jova_testimonial_args );
        ?>

        <?php if ($jova_testimonial_msg->have_posts()) : ?>

          <div class="col-11 col-sm-11 col-md-10 col-lg-5 col-xl-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php
                  $i = 0;
                  while ($jova_testimonial_msg->have_posts()) : $jova_testimonial_msg->the_post();
                  $i++;
                  $active = ($i == 1) ? 'active': '';
                ?>

                <div class="carousel-item <?php echo " ".$active; ?>">
                  <div class="jumbotron shadow">
                    <h3><?php the_title(); ?></h3>
                    <h4>Prof</h4>
                    <p><?php the_content(); ?></p>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>


        <div class="col-11 col-sm-11 col-md-10 col-lg-7 col-xl-7">
          <!-- FORM -->
          <?php get_template_part('/inc/templates/jova', 'testimonialForm'); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <!-- Section testimonials end -->
  <!-- ###################### -->
