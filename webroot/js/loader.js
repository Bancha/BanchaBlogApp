/*
 * ExtJS App
 *
 * Bancha Sample Project
 * Copyright 2011-2012 Roland Schuetz
 *
 * @package       BanchaSampleProject
 * @subpackage    ExtJS.App
 * @copyright     Copyright 2011-2012 Roland Schuetz
 * @link          http://banchaproject.org Bancha Project
 * @author        Roland Schuetz <mail@rolandschuetz.at>
 * @since         v 1.0
 */

// for development use the dynamic loader
Ext.Loader.setConfig({
	enabled:true,
	paths: {
    	'Ext': './js/extjs/src' // this is where place extjs for development
	}
});


// init Bancha for loading models
Ext.onReady(function() {
	Bancha.init();
});