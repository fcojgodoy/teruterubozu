<?php
/*
Title:
*/

piklist( 'field', array(
    'type' => 'file'
    ,'field' => 'term_cover_image'
    ,'label' => __( 'Select the cover image', 'teruterubozu' )
    ,'options' => array(
        'modal_title' => __( 'Select the cover image', 'teruterubozu' )
        ,'button' => __( 'Add image', 'teruterubozu' )
        ,'preview_size' => 'full'
        ,'save' => 'url'
    )
) );
