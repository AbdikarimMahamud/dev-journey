<?php
declare(strict_types=1);

// Extract all hashtags
preg_match_all('/#(\w+)/', 'Learning #php and #sql today', $m);
print_r($m[1]); // ['php', 'sql']

// Named capture groups
$log = '2026-01-15 ERROR Database timeout';
if (preg_match('/^(?<date>[\d-]+) (?<level>[A-Z]+) (?<msg>.+)$/', $log, $parts)) {
    echo $parts['level'] . ": " . $parts['msg'] . PHP_EOL;
}

// Replace with a callback
echo preg_replace_callback('/\d+/', fn($x) => (string) ($x[0] * 2), "3 apples and 10 pears") . PHP_EOL;

// Split on several separators
print_r(preg_split('/[\s,;]+/', "a, b;c  d"));

// Validate a Kenyan style phone number: 07xx xxx xxx or 01xx xxx xxx
$phone = '0712345678';
echo preg_match('/^0[17]\d{8}$/', $phone) ? "valid" : "invalid", PHP_EOL;
