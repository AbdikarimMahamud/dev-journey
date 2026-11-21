# 19. Composer

Composer is PHP's dependency manager.

## Common commands
```bash
composer init                 # create composer.json
composer require monolog/monolog
composer require --dev phpunit/phpunit
composer install              # install from composer.lock
composer update               # update within allowed versions
composer dump-autoload        # rebuild autoloader
```

## Files
- `composer.json`: what you want
- `composer.lock`: exact versions installed (commit it for apps)
- `vendor/`: installed code (do not commit)

## Version constraints
`^2.1` means 2.1 up to but not including 3.0.

## Using packages
```php
require __DIR__ . '/vendor/autoload.php';
```
