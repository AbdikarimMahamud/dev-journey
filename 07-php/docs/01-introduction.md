# 01. Introduction to PHP

PHP is a server-side scripting language built for the web. PHP code runs on the server, produces output (usually HTML or JSON) and sends it to the browser.

## Where PHP is used
- Websites and CMSs (WordPress, Drupal)
- Frameworks such as Laravel and Symfony
- REST APIs and command-line scripts

## How a request flows
1. The browser requests a page.
2. The web server passes the request to PHP.
3. PHP runs the script, optionally querying a database.
4. The output is sent back to the browser.

## Your first script
```php
<?php
echo "Hello, world!";
```

## Key facts
- Files use the `.php` extension and start with `<?php`.
- Statements end with a semicolon.
- Variables start with `$`.
- PHP is dynamically typed, but modern PHP supports type declarations.
