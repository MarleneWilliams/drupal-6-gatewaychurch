<?php

function phptemplate_preprocess_page(&$vars) {
  $js = drupal_add_js();
  unset($js['module']['sites/all/modules/jquery_update/replace/tabledrag.js']); 
  $vars['scripts'] = $js;
}