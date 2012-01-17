<?php

$plugin = array(
  'title' => t('Precision two columns left'),
  'theme' => 'precision_column_two_left',
  'icon' => 'precision-column-two-left.png',
  'category' => 'Precision',
  'regions' => array(
    'header_alpha' => t('Header alpha'),
    'main' => t('Main'),
    'aside_alpha' => t('Aside alpha'),
    'footer_alpha' => t('Footer alpha'),
  ),
);

/**
 * Implementation of theme_preprocess_precision_column_two_left().
 */
function precision_preprocess_precision_column_two_left(&$vars) {
  precision_check_layout_variables($vars);
}
