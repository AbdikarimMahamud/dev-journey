# 08. Arrays

## Indexed and associative
```php
$colors = ["red", "green"];
$user = ["name" => "Ada", "age" => 36];
$colors[] = "blue";
echo $user["name"];
```

## Common functions
| Function | Purpose |
|---|---|
| `count($a)` | length |
| `array_push`, `array_pop` | add/remove at the end |
| `in_array($v, $a)` | membership check |
| `array_key_exists($k, $a)` | key check |
| `array_merge($a, $b)` | combine |
| `array_slice($a, 1, 2)` | sub-array |
| `sort`, `usort`, `ksort` | sorting |
| `array_unique` | remove duplicates |

## Functional style
```php
$nums = [1, 2, 3, 4];
$evens = array_filter($nums, fn($n) => $n % 2 === 0);
$squares = array_map(fn($n) => $n ** 2, $nums);
$sum = array_sum($nums);
```

## Destructuring and spread
```php
[$a, $b] = [1, 2];
['name' => $name] = $user;
$merged = [...$list1, ...$list2];
```
