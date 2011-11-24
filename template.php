<?php
/**
 * Implements theme_preprocess_page(&$variables);
 */
function fjernvarme2_preprocess_html(&$variables) {
  drupal_add_css(drupal_get_path('theme', 'precision') .'/css/grid.css');
  drupal_add_js('
function hasBorderRadius() {
  var d = document.createElement("div").style;
  if (typeof d.borderRadius !== "undefined") return true;
  if (typeof d.WebkitBorderRadius !== "undefined") return true;
  if (typeof d.MozBorderRadius !== "undefined") return true;
  return false;
};
(function ($) {
$(document).ready(function() {
if (hasBorderRadius()) { // 1
  $(".img-rounded-corners img").each(function() { // 2
    $(this).wrap(\'<div class="img-rounded-corners" />\'); // 3
    var imgSrc = $(this).attr("src"); // 4
    var imgHeight = $(this).height(); // 4
    var imgWidth = $(this).width(); // 4
    $(this).parent()
      .css("background-image", "url(" + imgSrc + ")")
      .css("background-repeat","no-repeat")
      .css("height", imgHeight + "px")
      .css("width", imgWidth + "px"); // 5
    $(this).remove(); // 6
  });
}
});
})(jQuery);

', 'inline');
}
