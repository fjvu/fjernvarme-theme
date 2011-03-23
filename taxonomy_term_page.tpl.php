<?php $page_term = taxonomy_get_term(arg(2)); // path: site.com/taxonomy/term/n ?>
<?php if ($page_term) { ?>
  <div class="taxonomy-term-info">
    <?php print $page_term->description; ?>
  </div>
<?php } ?>

<h2>Dokumenter</h2>

<div>
  <?php 
    $view = views_get_view('documents_list');
    $display = $view->execute_display('Block', $tids);
    print $display;
  ?>
</div>
