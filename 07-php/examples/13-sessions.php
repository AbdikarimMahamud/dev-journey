<?php
declare(strict_types=1);

// A visit counter using sessions.
// This one runs in a browser: php -S localhost:8000 -t 07-php/examples
// then open http://localhost:8000/13-sessions.php and refresh a few times.

session_start();

$_SESSION['visits'] = ($_SESSION['visits'] ?? 0) + 1;

if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: 13-sessions.php');
    exit;
}

header('Content-Type: text/plain; charset=utf-8');
echo "You have visited this page {$_SESSION['visits']} time(s).\n";
echo "Add ?reset=1 to the URL to clear the session.\n";
