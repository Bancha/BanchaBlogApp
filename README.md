Blog App - A Bancha Sample Project
==================================

This project is show casing the usage of Bancha together with Ext Designer by creating a Blog Application. It will demonstrate how to use Bancha in the ExtJS MVC, and how to use Authentification.

For more information about Bancha go to [banchaproject.org](http://banchaproject.org)

How to setup the project:
-------------------------
1. Download [CakePHP](http://www.cakephp.org) latest (tested with 2.0.5)
1. Download this project inside __/app__
1. Download [ExtJS 4](http://www.sencha.com/products/extjs/download/).
1. Copy the whole package into _app/webroot/js/extjs/_ and the ExtJS ressources folder into _app/webroot/css/_
1. Configure your _app/Config/database.php_, then add the tables from _app/Config/schema/test-database.sql_ to your database
1. Open __/bancha/setup-check.html__ to see if everything works.

Done.


How to test the application:
-------------------------
You can login with three different levels:

* admin:     username & password: roland
* moderator: username & password: joe
* user:      username & password: martin


Futher development:
-------------------------
 - The User Management is a basic example, a full application should handle expired sessions, registration, etc.

-------------------------

(c) 2012, Roland Schütz
mail@rolandschuetz.at