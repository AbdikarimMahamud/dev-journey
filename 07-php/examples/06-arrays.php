<?php
declare(strict_types=1);

$products = [
    ['name' => 'Coffee', 'price' => 4.5, 'stock' => 10],
    ['name' => 'Tea', 'price' => 3.0, 'stock' => 0],
    ['name' => 'Cake', 'price' => 6.25, 'stock' => 4],
];

// Filter, map, reduce
$inStock = array_filter($products, fn($p) => $p['stock'] > 0);
$names = array_map(fn($p) => $p['name'], $inStock);
$total = array_reduce($inStock, fn($c, $p) => $c + $p['price'] * $p['stock'], 0.0);

echo implode(", ", $names) . PHP_EOL;
echo "Inventory value: " . number_format($total, 2) . PHP_EOL;

// Sorting by price descending
usort($products, fn($a, $b) => $b['price'] <=> $a['price']);
echo $products[0]['name'] . PHP_EOL;

// Column extraction and lookup
$prices = array_column($products, 'price', 'name');
print_r($prices);

// Destructuring and spread
['name' => $first] = $products[0];
$merged = [...[1, 2], ...[3, 4]];
echo $first . " " . implode(",", $merged) . PHP_EOL;
