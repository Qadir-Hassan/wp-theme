<?php 

  register_nav_menus(
  array(
    'primary-menu'=>"Primary Menu",
    'footer-menu'=>'Footer Menu'
  )

  );

  function surfa_theme_custom_header_setup() {
    $defaults = array(
      // Default Header Image to display.
      'default-image'          => get_template_directory_uri() . '/assets/img/logo/white-logo.svg',
      // Display the header text along with the image.
      'header-text'            => true,
      // Header text color default.
      'default-text-color'     => '000',
      // Header image width (in pixels).
      'width'                  => 1000,
      // Header image height (in pixels).
      'height'                 => 198,
      // Header image random rotation default.
      'random-default'         => false,
      // Enable upload of image file in admin.
      'uploads'                => false,
      // Function to be called in theme head section.
      'wp-head-callback'       => 'wphead_cb',
      // Function to be called in preview page head section.
      'admin-head-callback'    => 'adminhead_cb',
      // Function to produce preview markup in the admin screen.
      'admin-preview-callback' => 'adminpreview_cb',
    );
  }
  add_action('after_setup_theme', 'surfa_theme_custom_header_setup' );