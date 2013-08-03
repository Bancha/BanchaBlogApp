Sencha Architect MVC Example with Bancha
========================================

This project is show casing the usage of Bancha in Sencha Architect 2 by creating a blog application. It will demonstrate how to use Bancha in an Ext JS MVC, and how to use Authentification.

For more information go to our article [Using Sencha Architect 2](http://banchaproject.org/using-sencha-architect-2.html)

How to setup the project
------------------------
1. Download [CakePHP](http://www.cakephp.org) latest (tested with 2.3.8)
1. Download this project inside __/app__
1. Configure your _app/Config/database.php_, then add the tables from _app/Config/schema/test-database.sql_ to your database
1. Open __/bancha/setup-check.html__ to see if everything works.

Done.


Usage
-----
You can login with three different authorization levels, use the name both for username and password:

* admin:     roland
* moderator: joe
* user:      martin


Futher development
------------------
 - The User Management is a basic example, a full application should handle expired sessions, registration, etc.

-------------------------

(c) 2012-2013 codeQ e.U.
support@banchaproject.org
