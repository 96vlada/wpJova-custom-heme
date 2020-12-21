<!-- ###################### -->
  <!-- Header main start -->


  <section class="bg-light pt-5 pb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-7 col-xl-7">
          <div class="row justify-content-center">
            <div class="col-12 text-center">
              <h1>
                <?php
                  esc_html_e($args['main_section_data']['jova_main_title']);
                ?>
              </h1>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-12 text-justify">
              <h4>
                <?php
                  esc_html_e($args['main_section_data']['jova_main_description']);
                ?>
              </h4>
            </div>
          </div>
          <div class="row justify-content-center mt-5 text-center">
            <div id="main-section-image" class="col-10 col-sm-9 col-md-7 col-lg-7 col-xl-6">
              <?php if ($args['main_section_data']['jova_main_image'] !== ""): ?>
                <img src="<?php esc_attr_e($args['main_section_data']['jova_main_image']); ?>" alt="Image for main section">
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div id="contact-form-main" class="col-lg-5 col-xl-5">
          <div class="jumbotron bg-light shadow-sm pt-4 pb-4"><h1>
            <?php
              esc_html_e($args['main_section_data']['jova_main_contact_title']);
            ?>
          </h1></div>

          <!-- form start -->
          <div class="jumbotron bg-primary text-white text-center">
            <h2>
              <?php
                esc_html_e($args['main_section_data']['jova_main_box_title']);
              ?>
            </h2>
            <div class="mt-4">
              <?php if ($args['main_section_data']['jova_main_phone_number'] !== ""): ?>
                <h4 class="alert alert-secondary pb-4 pt-3">Phone: <b><?php esc_html_e($args['main_section_data']['jova_main_phone_number']); ?></b></h4>
              <?php endif; ?>

              <?php if ($args['main_section_data']['jova_main_facebook_url'] !== ""): ?>
                <h4 class="alert alert-info pb-4 pt-3"><b><a href="<?php echo esc_url($args['main_section_data']['jova_main_facebook_url']); ?>">Our facebook account</a></b></h4>
              <?php endif; ?>

              <?php if ($args['main_section_data']['jova_main_gmail'] !== ""): ?>
                <h4 class="alert alert-danger pb-4 pt-3">Gmail: <b><?php esc_html_e($args['main_section_data']['jova_main_gmail']); ?></b></h4>
              <?php endif; ?>

              <?php if ($args['main_section_data']['jova_main_instagram_url'] !== ""): ?>
                <h4 class="alert alert-warning pb-4 pt-3"><b><a href="<?php echo esc_url($args['main_section_data']['jova_main_instagram_url']); ?>">Our instagram account</a></b></h4>
              <?php endif; ?>

              <?php if ($args['main_section_data']['jova_main_button_title'] !== ""): ?>
                <a class="btn btn-light mt-3 shadow pl-5 pr-5" href="<?php echo esc_url($args['main_section_data']['jova_main_button_url']); ?>">
                  <h4>
                    <?php
                      esc_html_e($args['main_section_data']['jova_main_button_title']);
                    ?>
                  </h4>
                </a>
              <?php endif; ?>

            </div>
          </div>

          <!-- form end -->
        </div>
      </div>

    </div>
  </section>
  <!-- ###################### -->
  <!-- Header main end -->
  <!-- ###################### -->
