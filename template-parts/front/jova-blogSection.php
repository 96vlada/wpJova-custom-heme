<!-- ###################### -->
  <!-- Section blogs start -->
  <!-- ###################### -->
  <section class="bg-light pt-5 pb-5">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-12">
          <?php if ($args['blog_section_data']['jova_blog_icon'] !== ""): ?>
            <img src="<?php esc_attr_e($args['blog_section_data']['jova_blog_icon']); ?>" alt="Blog section icon">
          <?php endif; ?>
          <h1>
            <?php
              esc_html_e($args['blog_section_data']['jova_blog_mainTitle']);
            ?>
          </h1>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <?php

          $jova_blogs_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4
          );
          $jova_blogs_posts = new WP_Query( $jova_blogs_args );

        ?>
        <?php if ($jova_blogs_posts->have_posts()) : ?>

        	<?php while ($jova_blogs_posts->have_posts()) : $jova_blogs_posts->the_post(); ?>

            <div class="col-11 col-sm-10 col-md-6 col-lg-3 col-xl-3 mt-3">
              <div class="card shadow blog-image">
                 <img class="card-img-top" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="<?php echo the_title() . " image" ?>">
                 <div class="card-body">
                   <h4 class="card-title"><?php the_title(); ?></h4>
                   <p class="card-text"><?php the_excerpt(); ?></p>
                   <a class="btn btn-primary" href="<?php esc_attr_e(get_permalink(get_the_ID())); ?>"><h4>See this blog</h4></a>
                 </div>
                 <div class="card-footer">
                   <small class="text-muted">Published : <b><?php esc_html_e(get_the_date() . " in " .get_post_time('g:i a')); ?></b></small>
                 </div>
               </div>
            </div>

        	<?php endwhile; ?>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

      </div>
      <div class="row justify-content-center mt-5 pt-3 pb-4">
        <div class="col-12 text-center">
          <a class="btn btn-primary" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><h3>See all blogs</h3></a>
        </div>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <!-- Section blogs end -->
  <!-- ###################### -->
