<?php $terms = fjernvarme_separate_terms($node->taxonomy); ?>

<?php if (!empty($content) || !empty($title)): ?>

<?php if (!empty($pre_object)) print $pre_object ?>

<div <?php if (!empty($attr)) print drupal_attributes($attr) ?>>
  <?php if ($layout && (!empty($submitted) || !empty($links))): ?>
    <div class='column-side'><div class='column-wrapper'>
  <?php endif; ?>

  <?php if (!empty($submitted)): ?>
    <div class='<?php print $hook ?>-submitted clear-block'><?php print $submitted ?></div>
  <?php endif; ?>
  <?php if (!empty($links)): ?>
    <div class='<?php print $hook ?>-links clear-block'><?php print $links ?></div>
  <?php endif; ?>
  <?php if (!empty($taxonomy)): ?>
    <div class="category clear-block"><?php print t('Category'); ?>: <?php print $terms['features_tags_documents_category']; ?></div>
    <div class="tags clear-block"><?php print t('Tags'); ?>: <?php print $terms['features_tags_documents']; ?> </div>
    <div class="author clear-block"><?php print t('Author'); ?>: <?php print $terms['features_tags_documents_authors']; ?> </div>
    <div class="publisher clear-block"><?php print t('Publisher'); ?>: <?php print $terms['features_tags_documents_publisher']; ?> </div>
    <div class="year clear-block"><?php print t('Year'); ?>: <?php print $terms['features_tags_documents_year']; ?> </div>

  <?php endif; ?>

  <?php if ($layout && (!empty($submitted) || !empty($links))): ?>
    </div></div>
  <?php endif; ?>

  <?php if ($layout): ?>
    <div class='column-main'><div class='column-wrapper'>
  <?php endif; ?>

  <?php if (!empty($title) && !$page): ?>
    <h2 class='<?php print $hook ?>-title'>
      <?php if (!empty($new)): ?><a id='new' class='new'><?php print('New') ?></a><?php endif; ?>
      <a href='<?php print $node_url ?>'><?php print $title ?></a>
    </h2>
  <?php endif; ?>

  <?php if (!empty($content)): ?>
    <div class='<?php print $hook ?>-content clear-block <?php if (!empty($is_prose)) print 'prose' ?>'>
      <?php print $content ?>
    </div>
  <?php endif; ?>

  <?php if ($layout): ?>
    </div></div>
  <?php endif; ?>
</div>

<?php if (!empty($post_object)) print 'what' . $post_object ?>

<?php endif; ?>
