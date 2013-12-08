MVC Example App with Bancha
===========================

This project is show casing the usage of Bancha in Sencha Architect 3 by creating a blog application. It will demonstrate how to use Bancha in an Ext JS MVC, and how to use Authentication.

For more information go to our article how to use [Sencha Architect 3](http://banchaproject.org/documentation-pro-sencha-architect-3.html)

How to setup the project
------------------------
1. Download [CakePHP](http://www.cakephp.org) latest
1. Download this project inside _/app_
1. Configure your _app/Config/database.php_
1. Add the tables from _app/Config/schema/testdata.sql_ to your database
1. Replace _http://my-local-host.com/_ with your local domain in _app/sencha-architect/.sencha/app/sencha.cfg_, line 16 
1. Open _/bancha/setup-check.html_ to see if everything works.



Usage
-----
You can login with three different authorization levels, use the name both for username and password

* admin:     roland
* moderator: joe
* user:      martin


Futher development
------------------
The User Management is a basic example, a full application should handle expired sessions, registration, etc.


-------------------------

(c) 2012-2013 codeQ e.U.
support@banchaproject.org
