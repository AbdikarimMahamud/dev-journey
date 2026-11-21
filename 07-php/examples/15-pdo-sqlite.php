<?php
declare(strict_types=1);

// Needs the pdo_sqlite extension (enabled in most PHP installs).
$pdo = new PDO('sqlite::memory:', options: [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

$pdo->exec('CREATE TABLE users (id INTEGER PRIMARY KEY, name TEXT NOT NULL, email TEXT UNIQUE)');

$insert = $pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
foreach ([['Ada', 'ada@example.com'], ['Grace', 'grace@example.com']] as [$name, $email]) {
    $insert->execute(['name' => $name, 'email' => $email]);
}

$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$stmt->execute(['email' => 'grace@example.com']);
print_r($stmt->fetch());

// The malicious input below is safely treated as data
$stmt->execute(['email' => "x' OR '1'='1"]);
var_dump($stmt->fetch()); // bool(false)

$pdo->beginTransaction();
try {
    $pdo->prepare('UPDATE users SET name = ? WHERE id = ?')->execute(['Ada L.', 1]);
    $pdo->commit();
} catch (Throwable $e) {
    $pdo->rollBack();
    throw $e;
}

foreach ($pdo->query('SELECT id, name FROM users ORDER BY id') as $row) {
    echo "{$row['id']}: {$row['name']}" . PHP_EOL;
}
