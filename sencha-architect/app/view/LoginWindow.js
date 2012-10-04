/*
 * File: app/view/LoginWindow.js
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

Ext.define('BlogApp.view.LoginWindow', {
    extend: 'Ext.window.Window',
    alias: 'widget.loginwindow',

    height: 330,
    width: 500,
    resizable: false,
    layout: {
        type: 'fit'
    },
    closable: false,
    title: 'Login',
    modal: true,

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'form',
                    bodyPadding: 30,
                    frameHeader: false,
                    title: '',
                    paramsAsHash: true,
                    waitTitle: 'Logging in...',
                    items: [
                        {
                            xtype: 'component',
                            html: '<h2>Hello to the Sencha Architect example.</h2>\n\n<p>\nThis example has three different authorization levels.<br>\nLog in with username and password "martin" to just read the \narticles and comments. Login as "joe" to also delete comments, \nand as "roland" you can delete the whole article additionally. \n<br/><br/><br/>\n\nI hope you like it, now please log in:<br/>',
                            styleHtmlContent: true
                        },
                        {
                            xtype: 'textfield',
                            anchor: '100%',
                            name: 'username',
                            fieldLabel: 'Username',
                            allowBlank: false
                        },
                        {
                            xtype: 'textfield',
                            anchor: '100%',
                            inputType: 'password',
                            name: 'password',
                            fieldLabel: 'Password',
                            allowBlank: false
                        }
                    ],
                    dockedItems: [
                        {
                            xtype: 'toolbar',
                            dock: 'bottom',
                            ui: 'footer',
                            items: [
                                {
                                    xtype: 'tbspacer',
                                    flex: 1
                                },
                                {
                                    xtype: 'button',
                                    action: 'login',
                                    text: 'login'
                                }
                            ]
                        }
                    ]
                }
            ]
        });

        me.callParent(arguments);
    }

});