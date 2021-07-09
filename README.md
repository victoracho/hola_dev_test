hola_dev_test is a Symfony 4.4 with PHP test for the Hola Magazine. 

Technical requirements
-------------
Language: PHP 7.2+
Webserver: PHP native
Package manager: composer
PHP Framework: not required
Persistence layer: files or database
Coding Style: PSR-2
Mysql: 8

Configuration
-------------
In order to create the database you have to configure the DATABASE_URL on .env

```# DATABASE_URL="mysql://user:password@127.0.0.1:3306/hola?serverVersion=13&charset=utf8"
```

Installation
------------

With [composer](https://getcomposer.org), install:

`composer install`

Then create the database:

`php bin/console doctrine:database:create`

After that install the schema:
`php bin/console doctrine:schema:update --force`


Usage
-----
This app consists on 3 ROLE_ADMIN, ROLE_PAGE_1. ROLE_PAGE_2
with:
ROLE_ADMIN You can use the api crud, and check page/1 and page/2.
ROLE_PAGE_1 You can only check PAGE_1
ROLE_PAGE_2 You can only check PAGE_2

To go on through the test simply create an ROLE_ADMIN user and then login clicking on the navbar options.


Made by
-------
victoracho

