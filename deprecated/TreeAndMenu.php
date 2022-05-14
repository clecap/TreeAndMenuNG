<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	$ext = preg_replace( '%^.+/(.+?)\.php$%', '$1', __FILE__ );
	die(
		"Deprecated PHP entry point used for <i>$ext</i> extension. Please use wfLoadExtension instead, " .
		'see <a href="https://www.mediawiki.org/wiki/Extension_registration">Extension registration</a> for more details.'
	);
	return;
} else {
	die(
		"<b>Fatal error:</b> This version of the <i>$ext</i> extension requires MediaWiki 1.25+, "
	);
}
