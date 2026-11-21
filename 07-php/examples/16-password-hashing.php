<?php
declare(strict_types=1);

$plain = "correct horse battery staple";

$hash = password_hash($plain, PASSWORD_DEFAULT);
echo "Hash length: " . strlen($hash) . PHP_EOL;

var_dump(password_verify($plain, $hash));        // true
var_dump(password_verify("wrong password", $hash)); // false

// Hashing the same password twice gives different results (random salt)
var_dump($hash !== password_hash($plain, PASSWORD_DEFAULT));

// Secure random tokens, e.g. for CSRF or password resets
$token = bin2hex(random_bytes(16));
echo "Token: $token" . PHP_EOL;

// Compare secrets in constant time
var_dump(hash_equals($token, $token));

// Should an old hash be upgraded?
var_dump(password_needs_rehash($hash, PASSWORD_DEFAULT));
