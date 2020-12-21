<!-- ###################### -->
  <!-- Section footer start -->
  <!-- ###################### -->
  <section class="bg-footer pt-5 pb-5 text-white">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-11 col-sm-10 col-md-6 col-lg-3 col-xl-3">
          <h2><span class="border-bottom pb-2">Pages</span></h2>
          <div class="mt-4">
            <?php
              $jova_footer_pages = get_pages();

              //var_dump($jova_footer_pages);
            ?>
            <?php foreach ($jova_footer_pages as $jova_footer_page): ?>
              <div>
                <a class="text-white" href="<?php echo site_url($jova_footer_page->post_name); ?>">
                  <h4>
                    <?php
                    esc_html_e($jova_footer_page->post_title)
                    ?>
                  </h4>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-11 col-sm-10 col-md-6 col-lg-3 col-xl-3">
          <h2><span class="border-bottom pb-2">Categories</span></h2>
          <div class="mt-4">
            <?php
              $jova_footer_categories_args = array(
                'number'                   => 6,
                'type'                     => 'post',
                'orderby'                  => 'name',
                'order'                    => 'ASC',
                'hide_empty'               => FALSE,
                'hierarchical'             => 1,
                'parent'                   => 0,
                'taxonomy'                 => 'category',
              );
              $jova_footer_categories = get_categories($jova_footer_categories_args);

            ?>
            <?php foreach ($jova_footer_categories as $jova_footer_category): ?>
              <?php
                if ($jova_footer_category->name == "Uncategorized") {
                  continue;
                }
              ?>
              <div>
                <a class="text-white" href="<?php echo site_url($jova_footer_category->slug); ?>">
                  <h4>
                    <?php
                    esc_html_e($jova_footer_category->name)
                    ?>
                  </h4>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-11 col-sm-10 col-md-6 col-lg-3 col-xl-3">
          <h2><span class="border-bottom pb-2">Latest blog</span></h2>
          <div class="mt-4">
            <?php

            $jova_footer_posts_args = array(
               'orderby'          => 'date',
               'order'            => 'DESC',
               'post_type'        => 'post',
               'posts_per_page'      => 6,
             );
             $jova_footer_posts= get_posts($jova_footer_posts_args);

            ?>

            <?php foreach ($jova_footer_posts as $jova_footer_post): ?>
              <div>
                <a class="text-white" href="<?php echo site_url($jova_footer_post->post_name); ?>">
                  <h4>
                    <?php
                    $jova_footer_post_title = (strlen($jova_footer_post->post_title) > 20) ? substr($jova_footer_post->post_title, 0, 20) . "..." : $jova_footer_post->post_title;
                    esc_html_e($jova_footer_post_title);
                    ?>
                  </h4>
                </a>
              </div>
            <?php endforeach; ?>

          </div>
        </div>

        <div class="col-11 col-sm-10 col-md-6 col-lg-3 col-xl-3">
          <h2><span class="border-bottom pb-2">Contact</span></h2>
          <div class="mt-4">
            <?php
              $jova_footer_phone = get_theme_mod('jova_contact_phone', '');
              $jova_footer_facebook = get_theme_mod('jova_contact_facebook_url', '');
              $jova_footer_gmail = get_theme_mod('jova_contact_gmail', '');
              $jova_footer_instagram = get_theme_mod('jova_contact_instagram_url', '');
            ?>
            <?php if ($jova_footer_phone !== ""): ?>
              <div>
                <h4>
                  Phone:
                  <b>
                    <?php
                    esc_html_e($jova_footer_phone);
                    ?>
                  </b>
                </h4>
              </div>
            <?php endif; ?>

            <?php if ($jova_footer_facebook !== ""): ?>
              <div>
                <a class="text-white" href="<?php echo esc_url($jova_footer_facebook); ?>">
                  <h4>
                    facebook
                  </h4>
                </a>
              </div>
            <?php endif; ?>

            <?php if ($jova_footer_gmail !== ""): ?>
              <div>
                <h4>
                  Gmail:
                  <b>
                    <?php
                    esc_html_e($jova_footer_gmail);
                    ?>
                  </b>
                </h4>
              </div>
            <?php endif; ?>

            <?php if ($jova_footer_instagram !== ""): ?>
              <div>
                <a class="text-white" href="<?php echo esc_url($jova_footer_instagram); ?>">
                  <h4>
                    Instagram
                  </h4>
                </a>
              </div>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ###################### -->
  <!-- Section footer end -->
  <!-- ###################### -->


  <!-- ###################### -->
  <!-- Section footer bottom start -->
  <!-- ###################### -->
  <section class="bg-footer-bottom text-light pt-3 pb-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center text-sm-center text-md-left text-lg-left text-xl-left">
          <h5>@Copyright. JovaDev, 2020</h5>
        </div>

        <div class="col-11 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-center text-sm-center text-md-right text-lg-right text-xl-right">
          <h5>Powered by WordPress</h5>
        </div>
      </div>
      </div>
  </section>
  <!-- ###################### -->
  <!-- Section footer bottom end -->
  <!-- ###################### -->
