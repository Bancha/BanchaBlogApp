// Sencha Architect doesn't allow to set the model by using a function
// and it also doesn't allow a different namespace, so can't do neither
// model: Bancha.getModel('Article') nor model: 'Bancha.model.Article'
// With this override we can correctly set the model

Ext.define('BlogApp.store.override.Articles', {
    requires: 'BlogApp.store.Articles'
}, function() {
    Ext.override(BlogApp.store.Articles, {
        model: Bancha.getModel('Article')
    });
});