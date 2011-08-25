"Hello World" example application for Integry Framework. It is arranged in a traditional MVC manner and favors convention over configuration, so very little code is needed to get started.

It also includes a .htaccess file with mod_rewrite rules for "clean" URLs. For example, assuming the application is located in the /framework-hello-world directory of your web root, the URLs of the example actions could look as follows.

Home page (index/index action)
http://localhost/framework-hello-world - no action specified, so index/index is loaded as default
http://localhost/framework-hello-world/index - only controller specified, index action loaded as default
http://localhost/framework-hello-world/index/index - both controller and action specified
http://localhost/framework-hello-world/index/json - same controller, but different action

If the clean URLs cannot be configured at web server level, the URLs would look like this instead:
http://localhost/framework-hello-world/index.php?route=index
http://localhost/framework-hello-world/index.php?route=index/json