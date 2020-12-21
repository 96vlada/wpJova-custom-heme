<?php get_header(); ?>

<?php

  if ('portfolio' == get_post_type()) {
    $jova_blogs_args_content_page = array(
      'post_type' => 'portfolio',
      'post_status' => 'publish',
    );
  }else{
    $jova_blogs_args_content_page = array(
      'post_type' => 'post',
      'post_status' => 'publish',
    );
  }

  $jova_blogs_posts_content_page = new WP_Query( $jova_blogs_args_content_page );

?>

<?php if ($jova_blogs_posts_content_page->have_posts()) : ?>

  <div class="container-fluid jumbotron pt-2 pb-2">
    <div class="row text-center">
      <div class="col-12">
        <?php if ('portfolio' == get_post_type()): ?>
          <h1>Our latest portfolios</h1>
          <?php else: ?>
          <h1>Our latest blogs</h1>
        <?php endif; ?>


      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-11 col-sm-10 col-md-7 col-lg-8 col-xl-8">
        <div class="row justify-content-center">
      	<?php while ($jova_blogs_posts_content_page->have_posts()) : $jova_blogs_posts_content_page->the_post(); ?>
          <div class="col-11 col-sm-11 col-md-10 col-lg-6 col-xl-6 mt-4 mt-sm-4 mt-md-4 mt-lg-0 mt-xl-0">
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
        </div>
      </div>

      <div class="col-11 col-sm-10 col-md-5 col-lg-4 col-xl-4 mt-5 mt-sm-5 mt-md-0 mt-lg-0 mt-xl-0">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>

<?php endif; ?>

<?php get_footer(); ?>
