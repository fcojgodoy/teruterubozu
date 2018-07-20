<?php
/*
Title:
*/

piklist( 'field', array(
    'type' => 'file'
    ,'field' => 'author_cover_image'
    ,'label' => __( 'Select your cover image', 'teruterubozu' )
    ,'options' => array(
        'modal_title' => __( 'Select your cover image', 'teruterubozu' )
        ,'button' => __( 'Add image', 'teruterubozu' )
        ,'preview_size' => 'full'
        ,'save' => 'url'
    )
) );
