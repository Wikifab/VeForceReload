<?php
namespace VeForceReload;

class Hooks {

	public static function onBeforePageDisplay( \OutputPage $out ) {

		$veaction = $out->getRequest()->getText('veaction');

		if( $veaction == 'edit') {
			$out->addModules( 'ext.veforcereload.js' );
		}
	}
}