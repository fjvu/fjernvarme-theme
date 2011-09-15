<?php

$plugin = array(
  'title' => t('Precision 3 column stacked site template'),
  'theme' => 'precision_column_three_stacked',
  'icon' => 'precision-column-three-stacked.png',
  'category' => 'Precision',
  'regions' => array(
    'branding' => t('Branding'),
    'nav' => t('Navigation'),
    'left' => t('Left'),
    'main' => t('Main'),
    'right' => t('Right'),
    'footer' => t('Footer'),
  ),
);

/**
 * Preprocess the site template layout.
 */
function precision_preprocess_precision_column_three_stacked(&$vars) {
  precision_check_layout_variables($vars);
}
