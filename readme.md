PHP dotenv for codeigniter
==========================

Loads environment variables from `.env` to `getenv()` automagically.

This is a PHP version of the original [Ruby
dotenv](https://github.com/bkeepers/dotenv).

Why .env?
---------
**You should never store sensitive credentials in your code**. Storing
[configuration in the environment](http://www.12factor.net/config) is one of
the tenets of a [twelve-factor app](http://www.12factor.net/). Anything that is
likely to change between deployment environments – such as database credentials
or credentials for 3rd party services – should be extracted from the
code into environment variables.

Basically, a `.env` file is an easy way to load custom configuration
variables that your application needs without having to modify .htaccess
files or Apache/nginx virtual hosts. This means you won't have to edit
any files outside the project, and all the environment variables are
always set no matter how you run your project - Apache, Nginx, CLI, and
even PHP 5.4's built-in webserver. It's WAY easier than all the other
ways you know of to set environment variables, and you're going to love
it.

* NO editing virtual hosts in Apache or Nginx
* NO adding `php_value` flags to .htaccess files
* EASY portability and sharing of required ENV values
* COMPATIBLE with PHP's built-in web server and CLI runner


Manual Installation without Composer
------------------------------------
- copy folder "system" to your codeigniter projects

- add this code to your codeigniter index.php before codeigniter core loaded 
(before this text "* LOAD THE BOOTSTRAP FILE")
```php
/*
 * --------------------------------------------------------------------
 * LOAD PHP DOT ENV FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 *
 */
require_once BASEPATH . 'dotenv/autoloader.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
```

- in file "application/config/database.php" change to this configuration
```php
$db['default']['hostname'] = getenv('DB_HOST');
$db['default']['username'] = getenv('DB_USERNAME');
$db['default']['password'] = getenv('DB_PASSWORD');
$db['default']['database'] = getenv('DB_DATABASE');
$db['default']['dbdriver'] = getenv('DB_CONNECTION');
```

- create ".env" by copy file ".env.example" for database configuration and the other configuration

- add ".env" to your .gitignore file

- and it will be running, thank you