<?php
/*
Title:
*/

piklist('field', array(
  'type' => 'file'
  ,'field' => 'author_cover_image'
  ,'label' => __('Select your cover image', 'teruterubozu')
  ,'options' => array(
    'modal_title' => 'Add File(s)'
    ,'button' => 'Add'
    ,'preview_size' => 'full'
    ,'save' => 'url'
  )
));
