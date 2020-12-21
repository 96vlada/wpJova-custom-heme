<section class="bg-primary shadow sticky-top">

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-12">
        <nav class="navbar navbar-expand-xl navbar-dark">
          <a class="navbar-brand" href="#"><h1>
            <?php
              esc_html_e(get_bloginfo( 'name' ));
            ?>
          </h1></a>
          <div class="position-relative">
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span> </span>
              <span> </span>
              <span> </span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            if (has_nav_menu('primary')) {
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'container' => false,
                'depth' => 1,
                'menu_class' => 'navbar-nav ml-auto',
                'walker' => new JovaDev_Walker_Nav_Primary()
              ) );
            }

          	?>

            <!-- <div class="search-form ml-3">
              <img id="search-icon" src="<?php esc_attr_e(get_template_directory_uri(). '/images/loupe.png'); ?>" alt="Search open icon">
              <img id="close-icon" src="<?php esc_attr_e(get_template_directory_uri(). '/images/close.png'); ?>" alt="Search close icon">
              <form id="search-input" class="form-inline my-2 my-lg-0">
                <input class="rounded-0 form-control pb-3 pt-2" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div> -->
          </div>
        </nav>
      </div>
    </div>

  </div>
</section>
