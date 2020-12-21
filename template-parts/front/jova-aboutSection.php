<!-- ###################### -->
<!-- Section about us start -->
<!-- ###################### -->
<section id="jova-about-section" class="bg-primary text-light pt-5 pb-5">
  <div class="container pb-5">
    <div class="row justify-content-center">
      <div class="col-10 text-center">
        <?php if ($args['about_section_data']['jova_about_icon'] !== ""): ?>
          <img src="<?php esc_attr_e($args['about_section_data']['jova_about_icon']); ?>" alt="About us icon">
        <?php endif; ?>
        <h1>
          <?php
            esc_html_e($args['about_section_data']['jova_about_mainTitle']);
           ?>
        </h1>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <?php if ($args['about_section_data']['jova_about_image'] !== ""): ?>
        <div class="col-11 col-sm-11 col-md-10 col-lg-7 col-xl-7">
          <img id="about-us-image" class="shadow" src="<?php esc_attr_e($args['about_section_data']['jova_about_image']); ?>" alt="About us image">
        </div>
      <?php endif; ?>
      <div class="col-11 col-sm-11 col-md-10 col-lg-5 col-xl-5">
        <h1>
          <?php
            esc_html_e($args['about_section_data']['jova_about_title']);
          ?>
        </h1>
        <p class="text-justify">
          <?php
            esc_html_e($args['about_section_data']['jova_about_description']);
          ?>
        </p>
        <?php if ($args['about_section_data']['jova_about_btn_text'] !== ""): ?>
          <a class="btn btn-light" href="<?php echo esc_url($args['about_section_data']['jova_about_btn_url']); ?>">
            <h4>
              <?php
              esc_html_e($args['about_section_data']['jova_about_btn_text']);
              ?>
            </h4>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- ###################### -->
<!-- Section about us end -->
<!-- ###################### -->
