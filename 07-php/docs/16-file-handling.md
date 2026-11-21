# 16. File Handling

## Read and write
```php
$text = file_get_contents('notes.txt');
file_put_contents('log.txt', "entry\n", FILE_APPEND);
```

## Line by line
```php
$h = fopen('big.txt', 'r');
while (($line = fgets($h)) !== false) { echo $line; }
fclose($h);
```

## Helpers
| Function | Purpose |
|---|---|
| `file_exists` | check existence |
| `is_readable`, `is_writable` | permissions |
| `unlink` | delete |
| `mkdir` | create folder |
| `scandir` | list folder |
| `pathinfo` | name and extension |

## Uploads
Validate size and MIME type, generate a new file name and store uploads outside the web root when possible. Never trust the client file name.
