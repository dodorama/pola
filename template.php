<?php
/**
 * Add fontface css.
 */
function pola_preprocess_html(&$variables) {

  // Add conditional stylesheets for IE
  drupal_add_css('http://fonts.googleapis.com/css?family=Terminal+Dosis+Light', array('type' => 'external', 'group' => CSS_DEFAULT, 'preprocess' => TRUE));
}
