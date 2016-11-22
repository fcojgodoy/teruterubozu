<?php
/**
 * Add address field for users
 */
 // FIXME: adaptar para traducir

function modify_contact_methods($profile_fields) {

	// Add new fields
  $profile_fields['city'] = 'Where you are?';

	$profile_fields['twitter'] = 'Twitter Username';
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['gplus'] = 'Google+ URL';

	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');
