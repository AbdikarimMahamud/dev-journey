<?php
declare(strict_types=1);

// Validation logic separated from HTTP so it can run in the terminal.
function validateRegistration(array $input): array
{
    $errors = [];

    $name = trim($input['name'] ?? '');
    if ($name === '' || mb_strlen($name) < 2) {
        $errors['name'] = "Name must be at least 2 characters";
    }

    if (!filter_var($input['email'] ?? '', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is not valid";
    }

    $age = filter_var($input['age'] ?? null, FILTER_VALIDATE_INT, [
        'options' => ['min_range' => 13, 'max_range' => 120],
    ]);
    if ($age === false) {
        $errors['age'] = "Age must be between 13 and 120";
    }

    if (strlen($input['password'] ?? '') < 8) {
        $errors['password'] = "Password must be at least 8 characters";
    }

    return $errors;
}

$bad = ['name' => 'A', 'email' => 'nope', 'age' => '5', 'password' => '123'];
$good = ['name' => 'Ada', 'email' => 'ada@example.com', 'age' => '36', 'password' => 'secret123'];

print_r(validateRegistration($bad));
echo count(validateRegistration($good)) === 0 ? "Good input passes" : "unexpected", PHP_EOL;

// When printing user input in HTML, always escape it
echo htmlspecialchars("<script>alert('x')</script>", ENT_QUOTES, 'UTF-8') . PHP_EOL;
