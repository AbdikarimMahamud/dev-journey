# 12. Namespaces and Autoloading

## Namespaces
Namespaces prevent name collisions.
```php
<?php
namespace App\Models;

class User {}
```

## Importing
```php
use App\Models\User;
use App\Services\Mailer as Mail;
```

## Autoloading
Instead of many `require` lines, Composer loads classes automatically using PSR-4.

`composer.json`:
```json
"autoload": { "psr-4": { "App\\": "src/" } }
```
`src/Models/User.php` maps to `App\Models\User`.

Then in your entry file:
```php
require __DIR__ . '/vendor/autoload.php';
```

## Rules
- One class per file.
- File name matches class name.
- Folder path matches namespace.
