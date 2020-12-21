<ul class="list-group">
  <li class="list-group-item bg-primary text-light">
    <h5>Our latest posts</h5>
  </li>
  <?php

    $jova_latest_posts_blog_page_args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 4
    );
    $jova_latest_posts_blog_page = new WP_Query( $jova_latest_posts_blog_page_args );


  ?>
  <?php if ($jova_latest_posts_blog_page->have_posts()) : ?>

    <?php while ($jova_latest_posts_blog_page->have_posts()) : $jova_latest_posts_blog_page->the_post(); ?>

      <li class="list-group-item">
        <h5><?php the_title(); ?></h5>
        <a class="btn btn-primary pr-4 pl-4" href="<?php esc_attr_e(get_permalink(get_the_ID())); ?>">See</a>
      </li>

    <?php endwhile; ?>

  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

</ul>
