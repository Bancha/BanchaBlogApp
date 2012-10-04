
Blog App - A Bancha Sample Project using Sencha Architect
=========================================================

This project is show casing the usage of Bancha together with Sencha Architect 2 by creating a Blog Application. It will demonstrate how to use Bancha in the ExtJS MVC, and how to use Authentification.

For more information about Bancha go to [banchaproject.org](http://banchaproject.org)

How to setup the project:
-------------------------
1. Download [CakePHP](http://www.cakephp.org) latest (tested with 2.0.5)
1. Download this project inside __/app__
1. Configure your _app/Config/database.php_, then add the tables from _app/Config/schema/test-database.sql_ to your database
1. Open __/bancha/setup-check.html__ to see if everything works.

Done.


How to test the application:
-------------------------
You can login with three different authorization levels, use the name both for username and password:

* admin:     roland
* moderator: joe
* user:      martin


Futher development:
-------------------------
 - The User Management is a basic example, a full application should handle expired sessions, registration, etc.

-------------------------

(c) 2012, Roland Schütz
mail@rolandschuetz.at