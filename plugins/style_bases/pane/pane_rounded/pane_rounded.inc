<?php

/**
 * @file
 * Definition of the style base for the rounded box.
 *
 * This box is colorable, has rounded corners.
 */

$plugin = array(
  'category' => t('Basic styles'),
  'title' => t('Rounded corners'),
  'module' => 'panels',
  'type' => 'pane',
  'css' => 'pane-rounded.css',
  'icon' => 'icon.png',
  'defaults' => array('header_font' => array(), 'text_font' => array(), 'padding' => array(), 'corner_size' => array(), 'border' => array(), 'header_border' => array()),
  'palette' => array(
    'background' => array(
      'label' => t('Background'),
      'default_value' => '#FFFFFF',
    ),
    'text' => array(
      'label' => t('Text'),
      'default_value' => '#000000',
    ),
    'header-text' => array(
      'label' => t('Header text'),
      'default_value' => '#000000',
    ),
    'header-border' => array(
      'label' => t('Header border'),
      'default_value' => '#000000',
    ),
    'border' => array(
      'label' => t('Border'),
      'default_value' => '#FFFFFF',
    ),
  ),
  'actions' => array(
  ),

  'theme' => 'pane_rounded',
  'build' => 'panels_rounded_style_base_build',
  'settings form' => 'panels_pane_rounded_style_settings',
  'settings form submit' => 'panels_pane_rounded_style_settings_submit',
  'build' => 'panels_pane_rounded_style_base_build',
);

function template_preprocess_pane_rounded(&$vars) {
  $vars['classes_array'][] = $vars['content']->css_class;
  $vars['content']->css_class = '';

  $vars['output'] = theme('panels_pane', $vars);
}

function panels_pane_rounded_style_settings(&$form, &$form_state) {
  $form['header_border'] = array();
  ctools_stylizer_border_selector_form($form['header_border'], $form_state, t('Header border'), $form_state['settings']['header_border']);

  $form['header_font'] = array();
  ctools_stylizer_font_selector_form($form['header_font'], $form_state, t('Header font'), $form_state['settings']['header_font']);

  $form['corner_size'] = array();
  ctools_stylizer_corners_selector_form($form['corner_size'], $form_state, t('Corner size'), $form_state['settings']['corner_size']);

  $form['border'] = array();
  ctools_stylizer_border_selector_form($form['border'], $form_state, t('Border'), $form_state['settings']['border']);

  $form['padding'] = array();
  ctools_stylizer_padding_selector_form($form['padding'], $form_state, t('Padding'), $form_state['settings']['padding']);

  $form['text_font'] = array();
  ctools_stylizer_font_selector_form($form['text_font'], $form_state, t('Text font'), $form_state['settings']['text_font']);

}

function panels_pane_rounded_style_settings_submit(&$form, &$form_state) {
  ctools_stylizer_corners_selector_form_submit($form['corner_size'], $form_state, $form_state['values']['corner_size'], $form_state['settings']['corner_size']);
  ctools_stylizer_font_selector_form_submit($form['header_font'], $form_state, $form_state['values']['header_font'], $form_state['settings']['header_font']);
  ctools_stylizer_font_selector_form_submit($form['text_font'], $form_state, $form_state['values']['text_font'], $form_state['settings']['text_font']);
  ctools_stylizer_padding_selector_form_submit($form['padding'], $form_state, $form_state['values']['padding'], $form_state['settings']['padding']);
  ctools_stylizer_border_selector_form_submit($form['border'], $form_state, $form_state['values']['border'], $form_state['settings']['border']);
  ctools_stylizer_border_selector_form_submit($form['header_border'], $form_state, $form_state['values']['header_border'], $form_state['settings']['header_border']);  
}

function panels_pane_rounded_style_base_build($plugin, $settings, &$css, $replacements) {
  ctools_stylizer_font_apply_style($css, '%style .pane-title', $settings['header_font']);
  ctools_stylizer_font_apply_style($css, '%style .pane-content', $settings['text_font']);
  ctools_stylizer_padding_apply_style($css, '%style', $settings['padding']);
  ctools_stylizer_corners_apply_style($css, '.rounded-corners', $settings['corner_size']);
  ctools_stylizer_border_apply_style($css, '.rounded-corners', $settings['border'], '%border');  
  ctools_stylizer_border_apply_style($css, '%style .pane-title', $settings['header_border'], '%header-border', 'bottom');  
}

/**
 * padding selector form
 */
function ctools_stylizer_corners_selector_form(&$form, &$form_state, $label, $settings) {
  // Family
  $form['#prefix'] = '<div class="ctools-stylizer-spacing-form clearfix">';
  $form['#type'] = 'fieldset';
  $form['#title'] = $label;
  $form['#suffix'] = '</div>';
  $form['#tree'] = TRUE;

  $options = array(
    '' => t('Choose'),
    "5px" => '5px',
    "10px" => '10px',
  );

  $form['corner_size'] = array(
    '#title' => t('Size'),
    '#type' => 'select',
    '#default_value' => isset($settings['corner_size']) ? $settings['corner_size'] : '',
    '#options' => $options,
  );
}

/**
 * Copy padding selector information into the settings
 */
function ctools_stylizer_corners_selector_form_submit(&$form, &$form_state, &$values, &$settings) {
  $settings = $values;
}

function ctools_stylizer_corners_apply_style(&$stylesheet, $selector, $settings) {
  $css = '';
  if (isset($settings['corner_size']) && $settings['corner_size'] !== '') {
    $css .= '  -moz-border-radius: ' . $settings['corner_size'] . ";\n";
    $css .= '  -webkit-border-radius: ' . $settings['corner_size'] . ";\n";
    $css .= '  -khtml-border-radius: ' . $settings['corner_size'] . ";\n";            
    $css .= '  border-radius: ' . $settings['corner_size'] . ";\n";            
  }

  if ($css) {
    $stylesheet .= $selector . " {\n" . $css . "}\n";
  }
}
