<?php
require_once( 'header.php' );

require_once( 'intro/section-intro.php' );

$handle = @opendir( dirname( __FILE__ ) . '/' . $folder );
if ( ! $handle )
	return;
// load via random of speed
while ( false !== ( $font = readdir( $handle ) ) ) {
	
	if ( 'section.php' === substr( $font, -11 ) ) {
		require_once dirname( __FILE__ ) . '/' . $folder . '/' . $font;
		echo "\n";
	}
}

require_once( 'footer.php' );

