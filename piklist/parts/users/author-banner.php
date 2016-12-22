<?php
/*
Title: My custom fields
*/

piklist('field', array(
  'type' => 'file'
  ,'field' => 'author_banner'
  ,'label' => __('Select your cover image', 'sage')
  ,'options' => array(
    'modal_title' => 'Add File(s)'
    ,'button' => 'Add'
    ,' preview_size' => 'full'
    ,'save' => 'url'
  )
));
