<?php
declare(strict_types=1);

$data = [
    'user' => ['id' => 1, 'name' => 'Ada'],
    'roles' => ['admin', 'editor'],
    'active' => true,
];

$json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $json . PHP_EOL;

$decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
echo $decoded['user']['name'] . PHP_EOL;

try {
    json_decode('{bad json}', true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    echo "Invalid JSON: " . $e->getMessage() . PHP_EOL;
}

// Typical API response helper
function jsonResponse(array $payload, int $status = 200): string
{
    // In a web request you would also call:
    // http_response_code($status); header('Content-Type: application/json');
    return json_encode(['status' => $status, 'data' => $payload]);
}
echo jsonResponse(['ok' => true]) . PHP_EOL;
