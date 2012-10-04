// Sencha Architect doesn't allow to set the model by using a function
// and it also doesn't allow a different namespace, so can't do neither
// model: Bancha.getModel('Comment') nor model: 'Bancha.model.Comment'
// With this override we can correctly set the model

Ext.define('BlogApp.store.override.Comments', {
    requires: 'BlogApp.store.Comments'
}, function() {
    Ext.override(BlogApp.store.Comments, {
        model: Bancha.getModel('Comment')
    });
});