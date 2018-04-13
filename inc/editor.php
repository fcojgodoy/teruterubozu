<?php
/**
 * teruterubozu modify editor
 *
 * @package teruterubozu
 */

/**
 * Registers an editor stylesheet for the theme.
 */
function teruterubozu_wpdocs_theme_add_editor_styles() {
  add_editor_style( array( 'assets/styles/custom-editor-style.css', teruterubozu_fonts_url() ) );
}
add_action( 'admin_init', 'teruterubozu_wpdocs_theme_add_editor_styles' );
