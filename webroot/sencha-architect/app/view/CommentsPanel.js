/*
 * File: app/view/CommentsPanel.js
 *
 * This file was generated by Sencha Architect version 3.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.2.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.2.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('BlogApp.view.CommentsPanel', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.commentspanel',

    requires: [
        'BlogApp.view.CommentsList',
        'BlogApp.view.CommentForm',
        'Ext.view.View',
        'Ext.form.Panel',
        'Ext.panel.Tool'
    ],

    autoScroll: true,
    title: 'Comments',

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'commentslist',
                    padding: 10
                },
                {
                    xtype: 'commentform'
                }
            ],
            tools: [
                {
                    xtype: 'tool',
                    tooltip: 'Manage comments',
                    type: 'gear'
                }
            ]
        });

        me.callParent(arguments);
    }

});