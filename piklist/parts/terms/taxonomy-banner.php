<?php
/*
Title:
*/

piklist('field', array(
  'type' => 'file'
  ,'field' => 'taxonomy_banner'
  ,'label' => __('Select the cover image', 'sage')
  ,'options' => array(
    'modal_title' => 'Add File(s)'
    ,'button' => 'Add'
    ,'preview_size' => 'full'
    ,'save' => 'url'
  )
));
