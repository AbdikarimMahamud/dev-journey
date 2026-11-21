# 17. Databases with PDO

PDO is PHP's database abstraction layer and works with MySQL, PostgreSQL and SQLite.

## Connect
```php
$pdo = new PDO('sqlite:app.db', options: [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
```

## Prepared statements
```php
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$stmt->execute(['email' => $email]);
$user = $stmt->fetch();
```

## Insert
```php
$pdo->prepare('INSERT INTO users (name) VALUES (?)')->execute([$name]);
$id = $pdo->lastInsertId();
```

## Transactions
```php
$pdo->beginTransaction();
try { /* queries */ $pdo->commit(); }
catch (Throwable $e) { $pdo->rollBack(); throw $e; }
```

## Golden rule
Never build SQL by concatenating user input. Always use prepared statements.
