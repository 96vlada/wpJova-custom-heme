<!-- ###################### -->
  <!-- Section contact start -->
  <!-- ###################### -->
  <section id="jova-contact-section" class="bg-light pt-5 pb-5">
    <div class="container mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-10">
          <?php if ($args['contact_section_data']['jova_contact_icon'] !== ""): ?>
            <img src="<?php esc_attr_e($args['contact_section_data']['jova_contact_icon']); ?>" alt="Contact section icon">
          <?php endif; ?>
          <h1>
            <?php
              esc_html_e($args['contact_section_data']['jova_contact_mainTitle']);
            ?>
          </h1>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-11 col-md-9 col-lg-7 col-xl-7">
          <!-- form start -->
          <?php
          get_template_part(
            'inc/templates/jova',
            'mainForm',
            array(
            'jova_main_section_data' => array(
              'jova_main_form_name' => $args['contact_section_data']['jova_main_form_name'],
              'jova_main_form_email' => $args['contact_section_data']['jova_main_form_email'],
            )));;
          ?>
        </div>
        <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-5 text-center mt-5 mt-sm-5 mt-md-5 mt-lg-0 mt-xl-0">
          <?php if ($args['contact_section_data']['jova_contact_phone'] !== ""): ?>
            <h5 class="alert alert-secondary pb-4 pt-3">Phone: <b><?php esc_html_e($args['contact_section_data']['jova_contact_phone']); ?></b></h5>
          <?php endif; ?>

          <?php if ($args['contact_section_data']['jova_contact_facebook_url'] !== ""): ?>
            <h5 class="alert alert-info pb-4 pt-3"><b><a href="<?php echo esc_url($args['contact_section_data']['jova_contact_facebook_url']); ?>">Our facebook account</a></b></h5>
          <?php endif; ?>

          <?php if ($args['contact_section_data']['jova_contact_gmail'] !== ""): ?>
            <h5 class="alert alert-danger pb-4 pt-3">Gmail: <b><?php esc_html_e($args['contact_section_data']['jova_contact_gmail']); ?></b></h5>
          <?php endif; ?>

          <?php if ($args['contact_section_data']['jova_contact_instagram_url'] !== ""): ?>
            <h5 class="alert alert-warning pb-4 pt-3"><b><a href="<?php echo esc_url($args['contact_section_data']['jova_contact_instagram_url']); ?>">Our instagram account</a></b></h5>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <!-- Section contact end -->
  <!-- ###################### -->
