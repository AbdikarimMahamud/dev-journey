<?php
declare(strict_types=1);

function groupBy(array $items, string $key): array
{
    $groups = [];
    foreach ($items as $item) {
        $groups[$item[$key]][] = $item;
    }
    return $groups;
}
