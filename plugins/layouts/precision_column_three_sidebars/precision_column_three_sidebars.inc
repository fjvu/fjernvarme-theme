<?php

$plugin = array(
  'title' => t('Precision 3 column sidebars template'),
  'theme' => 'precision_column_three_sidebars',
  'icon' => 'precision-column-three-sidebars.png',
  'category' => 'Precision',
  'regions' => array(
    'header_alpha' => t('Header alpha'),
    'main' => t('Main'),
    'aside_alpha' => t('Aside alpha'),
    'aside_beta' => t('Aside beta'),
    'footer_alpha' => t('Footer alpha'),
  ),
);

/**
 * Preprocess the site template layout.
 */
function precision_preprocess_precision_column_three_sidebars(&$vars) {
  precision_check_layout_variables($vars);
}
