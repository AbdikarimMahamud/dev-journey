<?php
declare(strict_types=1);

date_default_timezone_set('Africa/Nairobi');

$now = new DateTimeImmutable('2026-01-15 10:30:00');
echo $now->format('Y-m-d H:i') . PHP_EOL;
echo $now->format('l, d F Y') . PHP_EOL;

$later = $now->modify('+10 days');
echo $later->format('Y-m-d') . PHP_EOL;

$diff = $now->diff(new DateTimeImmutable('2026-03-01'));
echo "Days until March 1: " . $diff->days . PHP_EOL;

// Immutable objects never change the original
echo $now->format('Y-m-d') . PHP_EOL;

// Time zones
$utc = $now->setTimezone(new DateTimeZone('UTC'));
echo $utc->format('H:i T') . PHP_EOL;

// Period iteration
$period = new DatePeriod($now, new DateInterval('P1D'), 3);
foreach ($period as $day) {
    echo $day->format('D d') . " ";
}
echo PHP_EOL;
