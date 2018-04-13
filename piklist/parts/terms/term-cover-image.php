<?php
/*
Title:
*/

piklist('field', array(
  'type' => 'file'
  ,'field' => 'term_cover_image'
  ,'label' => __('Select the cover image', 'teruterubozu')
  ,'options' => array(
    'modal_title' => 'Add File(s)'
    ,'button' => 'Add'
    ,'preview_size' => 'full'
    ,'save' => 'url'
  )
));
