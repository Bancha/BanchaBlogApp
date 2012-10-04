/*
 * File: app/view/MyViewport.js
 *
 * This file was generated by Sencha Architect version 2.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.0.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.0.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('BlogApp.view.MyViewport', {
    extend: 'Ext.container.Viewport',

    requires: [
        'BlogApp.view.ArticleList',
        'BlogApp.view.ArticleReader',
        'BlogApp.view.CommentsPanel'
    ],

    layout: {
        type: 'border'
    },

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'articleslist',
                    width: 226,
                    region: 'west'
                },
                {
                    xtype: 'panel',
                    region: 'center',
                    itemId: 'articlePanel',
                    layout: {
                        type: 'border'
                    },
                    title: 'Article Name',
                    items: [
                        {
                            xtype: 'articlereader',
                            height: 384,
                            padding: 10,
                            width: 150,
                            region: 'center'
                        },
                        {
                            xtype: 'commentspanel',
                            region: 'south',
                            split: true
                        }
                    ],
                    tools: [
                        {
                            xtype: 'tool',
                            action: 'logout',
                            tooltip: 'logout',
                            type: 'close'
                        }
                    ]
                }
            ]
        });

        me.callParent(arguments);
    }

});