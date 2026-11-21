# 02. Installation and Setup

## Install PHP
- **Windows:** download from windows.php.net, or use XAMPP / Laragon, which bundle PHP, Apache and MySQL.
- **macOS:** `brew install php`
- **Ubuntu/Debian:** `sudo apt install php-cli`

Verify:
```bash
php -v
```

## Run a script
```bash
php script.php
```

## Built-in development server
```bash
php -S localhost:8000
```
Open http://localhost:8000 and PHP serves files from the current directory. Use this for development only.

## Useful php.ini settings for development
```ini
display_errors = On
error_reporting = E_ALL
```

## Editor setup
VS Code with the "PHP Intelephense" extension gives autocomplete and error hints.
