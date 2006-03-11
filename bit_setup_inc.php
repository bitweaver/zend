<?php
	global $gBitSystem, $gBitUser, $gBitSmarty;

	$registerHash = array(
		'package_name' => 'zend',
		'package_path' => dirname( __FILE__ ).'/',
	);
	$gBitSystem->registerPackage( $registerHash );

	function require_zend_file( $pFileName ) {
		$currentDir = dirname( __FILE__ );
		chdir( ZEND_PKG_PATH.'framework/library' );
		require_once( "Zend/$pFileName");
	}

?>
