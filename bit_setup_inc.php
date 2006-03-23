<?php
	global $gBitSystem, $gBitUser, $gBitSmarty;

	$registerHash = array(
		'package_name' => 'zend',
		'package_path' => dirname( __FILE__ ).'/',
	);
	$gBitSystem->registerPackage( $registerHash );

	function require_zend_file( $pFileName ) {
		$currentDir = dirname( __FILE__ );
		$look = array( 'library', 'incubator' );
		foreach ( $look as $subDir ) {
			chdir( ZEND_PKG_PATH.'framework/'.$subDir );
			if( file_exists( "Zend/$pFileName" ) ) {
				require_once( "Zend/$pFileName");
				break;
			}
		}
	}

?>
