<?php get_header(); ?>


  <div class="container mt-5 pb-5">
    <div class="row justify-content-center">
      <div class="col-9">
        <img class="card-img-top" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="<?php echo the_title() . " image" ?>">
        <h1><?php the_title(); ?></h1>
        <p>
          <?php the_content(); ?>
        </p>
        <small class="text-muted">Published : <b><?php esc_html_e(get_the_date() . " in " .get_post_time('g:i a')); ?></b></small>
      </div>
      <div class="col-3">
        <?php get_sidebar(); ?>
      </div>
    </div>

  </div>


<?php get_footer(); ?>
