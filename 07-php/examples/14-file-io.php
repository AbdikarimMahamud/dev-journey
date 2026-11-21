<?php
declare(strict_types=1);

$dir = sys_get_temp_dir() . '/php-journey';
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}
$file = $dir . '/notes.txt';

file_put_contents($file, "first line\n");
file_put_contents($file, "second line\n", FILE_APPEND);

echo file_get_contents($file);

$lines = file($file, FILE_IGNORE_NEW_LINES);
echo count($lines) . " lines" . PHP_EOL;

$info = pathinfo($file);
echo $info['filename'] . " ." . $info['extension'] . PHP_EOL;

// JSON config round trip
$configFile = $dir . '/config.json';
file_put_contents($configFile, json_encode(['debug' => true, 'port' => 8080], JSON_PRETTY_PRINT));
$config = json_decode(file_get_contents($configFile), true);
echo "port=" . $config['port'] . PHP_EOL;

unlink($file);
unlink($configFile);
