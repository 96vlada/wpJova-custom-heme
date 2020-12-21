<!-- ###################### -->
  <!-- Section offer strart -->
  <!-- ###################### -->
  <?php
    $jova_offer_select_args = array(
      'category_name' => $args['offer_section_data']['jova_offer_selectCat'],
    );
    $jova_offer_select_the_query = new WP_Query( $jova_offer_select_args );
  ?>


  <section class="bg-light pt-5 pb-5 text-primary">
    <div class="container pb-5">
      <div class="row justify-content-center text-center">
        <div class="col-10">
          <?php if ($args['offer_section_data']['jova_offer_icon'] !== ""): ?>
            <img src="<?php esc_attr_e($args['offer_section_data']['jova_offer_icon']); ?>" alt="Offer section icon">
          <?php endif; ?>
          <h1>
            <?php
              esc_html_e($args['offer_section_data']['jova_offer_mainTitle']);
            ?>
          </h1>

        </div>
      </div>
      <?php
      $jova_offer_cat_id = get_category_by_slug($args['offer_section_data']['jova_offer_selectCat']);

      $args = array(
        'type'                     => 'post',
        'child_of'                 => $jova_offer_cat_id->term_id,
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => FALSE,
        'hierarchical'             => 1,
        'taxonomy'                 => 'category',
      );
      $jova_offer_child_categories = get_categories($args );

      ?>
      <?php if (count($jova_offer_child_categories) > 0): ?>

      <div class="row justify-content-center mt-5 text-center">
        <?php foreach ($jova_offer_child_categories as $jova_offer_child_category): ?>
        <div class="col-11 col-sm-8 col-md-6 col-lg-4 col-xl-4">

          <div class="jumbotron bg-primary text-white">
            <a class="text-light" href="<?php echo esc_url(get_category_link($jova_offer_child_category->term_id)); ?>"><h2>
            <?php
            esc_html_e($jova_offer_child_category->name);
            ?>
            </h2></a>

          </div>
        </div>

        <?php endforeach; ?>

      <?php endif; ?>

      </div>
    </div>
  </section>
  <!-- ###################### -->
  <!-- Section offer end -->
  <!-- ###################### -->
