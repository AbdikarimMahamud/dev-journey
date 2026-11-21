# 06. Control Structures

## if / elseif / else
```php
if ($score >= 90) { echo "A"; }
elseif ($score >= 80) { echo "B"; }
else { echo "C"; }
```

## match (PHP 8)
```php
$text = match (true) {
    $code >= 500 => "Server error",
    $code >= 400 => "Client error",
    default => "OK",
};
```
`match` uses strict comparison and throws `UnhandledMatchError` if nothing matches and there is no default.

## Loops
```php
for ($i = 0; $i < 3; $i++) { echo $i; }
while ($n > 0) { $n--; }
foreach ($items as $key => $value) { echo "$key: $value"; }
```

## break and continue
`break` leaves the loop, `continue` skips to the next iteration.

## Tip
Prefer `foreach` for arrays. It is clearer and avoids off-by-one errors.
