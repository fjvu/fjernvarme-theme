<?php
/**
 * Implements theme_preprocess_page(&$variables);
 */
function fjernvarme_preprocess_html(&$variables) {
  drupal_add_css(drupal_get_path('theme', 'precision') .'/css/grid.css');
}
