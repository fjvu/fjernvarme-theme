<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture ?>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted; ?></span>
  <?php endif; ?>

  <div class="content clear-block">
    <?php print $content ?>
  </div>

  <div class="clear-block">
    <div class="meta">
  <?php if (!empty($taxonomy)): ?>
    <?php if ($node->type == 'documents'): ?>
      <?php $terms = fjernvarme_separate_terms($node->taxonomy); ?>
      <div class="category clear-block"><?php print t('Category'); ?>: <?php print $terms['features_tags_documents_category']; ?></div>
      <div class="tags clear-block"><?php print t('Tags'); ?>: <?php print $terms['features_tags_documents']; ?> </div>
      <div class="author clear-block"><?php print t('Author'); ?>: <?php print $terms['features_tags_documents_authors']; ?> </div>
      <div class="publisher clear-block"><?php print t('Publisher'); ?>: <?php print $terms['features_tags_documents_publisher']; ?> </div>
      <div class="year clear-block"><?php print t('Year'); ?>: <?php print $terms['features_tags_documents_year']; ?> </div>
    <?php else: ?>
      <div class="terms"><?php print $terms; ?></div>
    <?php endif; ?>

  <?php endif; ?>

    </div>

    <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>

</div>
