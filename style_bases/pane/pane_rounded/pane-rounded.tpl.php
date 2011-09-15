<?php
/**
 * @file
 *
 * Display the box for rounded corners.
 *
 * - $output: The content of the box.
 * - $classes: The classes that must be applied to the top divs.
 * - $pane: The pane being rendered
 * - $display: The display being rendered
 * - $content: The content being rendered (will be already in $output)
 *
 * Making it work with more browsers:
 * @link http://jonraasch.com/blog/css-rounded-corners-in-all-browsers
 */
?>
<div class="rounded-corners <?php print $classes ?>">
  <?php print $output; ?>
</div>
