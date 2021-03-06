<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<div<?php print $css_id ? " id=\"$css_id\"" : ''; ?> class="page-wrapper">

  <?php if (!empty($content['branding'])): ?>
    <div class="page-branding-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-branding grid-48">
          <div class="page-branding-inner clearfix">
            <?php print render($content['branding']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['nav'])): ?>
    <div class="page-nav-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-nav grid-48">
          <div class="page-nav-inner clearfix">
            <?php print render($content['nav']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['main'])): ?>
    <div class="page-main-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-left grid-12 alpha">
          <div class="page-left-inner clearfix">        
            <?php print render($content['left']); ?>
          </div>
        </div>
        <div class="page-body grid-25 omega">
          <div class="page-body-inner clearfix">
            <?php print render($content['main']); ?>
          </div>
        </div>
        <div class="page-right grid-11 omega">
          <div class="page-right-inner clearfix">        
            <?php print render($content['right']); ?>
          </div>            
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['footer'])): ?>
    <div class="page-closure-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-closure grid-48">
          <div class="page-closure-inner clearfix">
            <?php print render($content['footer']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

</div>
