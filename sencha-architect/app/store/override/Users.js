// Sencha Architect doesn't allow to set the model by using a function
// and it also doesn't allow a different namespace, so can't do neither
// model: Bancha.getModel('User') nor model: 'Bancha.model.User'
// With this override we can correctly set the model

Ext.define('BlogApp.store.override.Users', {
    requires: 'BlogApp.store.Users'
}, function() {
    Ext.override(BlogApp.store.Users, {
        model: Bancha.getModel('User')
    });
});