<?php
/**
 * Add extra user contact methods.
 *
 * @package teruterubozu
 * @since 0.1
 */

// TODO: no var global, ni sin namespace.

// Define custom fields
$extra_fields =  array(
    array( 'facebook', __( 'Facebook ID', 'teruterubozu' ), true ),
    array( 'twitter', __( 'Twitter Username', 'teruterubozu' ), true ),
    array( 'googleplus', __( 'Google+ ID', 'teruterubozu' ), true ),
    // array( 'linkedin', __( 'Linked In ID', 'teruterubozu' ), false ),
    // array( 'pinterest', __( 'Pinterest Username', 'teruterubozu' ), false ),
    // array( 'wordpress', __( 'WordPress.org Username', 'teruterubozu' ), false ),
    // array( 'phone', __( 'Phone Number', 'teruterubozu' ), true ),
    array( 'location', __( 'Your location', 'teruterubozu' ), true )
);

// Use the user_contactmethods to add new fields
add_filter( 'user_contactmethods', 'teruterubozu_add_user_contactmethods' );

/**
 * Add custom users custom contact methods
 *
 * @access      public
 * @since       0.1
 * @return      void
 */

function teruterubozu_add_user_contactmethods( $user_contactmethods ) {
    // Get fields
    global $extra_fields;
    // Display each fields
    foreach( $extra_fields as $field ) {
        if ( !isset( $contactmethods[ $field[0] ] ) )
	    $user_contactmethods[ $field[0] ] = $field[1];
    }

    // Returns the contact methods
    return $user_contactmethods;
}

?>
