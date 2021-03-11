<?php
  // Use of an ACF image field
  // Set the 'return value' option to "array" (this is the default)
  // This example uses three image sizes, called small, medium, large

  $acf_image = get_field('image');
  if( !empty($acf_image) ):
    echo '<img alt="' . $acf_image['title'] . '" src="' . $acf_image['sizes']['small'] . '" srcset="' . $acf_image['sizes']['small'] .' '. $acf_image['sizes']['small-width'] .'w, '. $acf_image['sizes']['medium'] .' '.  $acf_image['sizes']['medium-width'] .'w, '. $acf_image['sizes']['large'] .' '.  $acf_image['sizes']['large-width'] .'w">';
  endif;

  // src attribute should receive the smallest image because this is the image that is gonna be displayed on older browsers
