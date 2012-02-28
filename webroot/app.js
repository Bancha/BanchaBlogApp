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

// init Bancha for loading models
Ext.onReady(function() {
	Bancha.init();
});

/**
 * Blog.app
 * A MVC application which displays a Blog with multiple Articles and Comments
 */
Ext.application({
    name: 'BlogApp',
	appFolder: 'js/app', // our application is place here
	
    stores: [
        'Articles'
    ],

    views: [
        'MyViewport',
        'ArticlesList'
    ],
	/*
    requires: [
        'Bancha'
    ],*/
	
	/*
    controllers: [
        'Articles'
    ],*/
	
    autoCreateViewport: true
});

