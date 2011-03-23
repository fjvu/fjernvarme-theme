<?php
function fjernvarme_separate_terms($node_taxonomy) {
  if ($node_taxonomy) {
    //separating terms by vocabularies
    foreach ($node_taxonomy AS $term) {
      $links[fjernvarme_get_vocabulary_machinename_by_vid($term->vid)]['taxonomy_term_'. $term->tid] = array(
        'title' => $term->name,
        'href' => taxonomy_term_path($term),
        'attributes' => array(
          'rel' => 'tag',
          'title' => strip_tags($term->description)
        ),
      );
    }
    //theming terms out
    foreach ($links AS $key => $vid) {
      $terms[$key] = theme_links($vid);
    }
  }
  return $terms;
}

function fjernvarme_get_vocabulary_machinename_by_vid($vid) {
  if(!is_numeric($vid)) { 
    return false;
  }
  $result = db_query("SELECT module FROM {vocabulary} WHERE vid = %d", $vid);
  $name = db_fetch_object($result)->module;
 
  return $name ? $name : false;
}
