<?php
declare(strict_types=1);

function wordCount(string $s): array
{
    $words = preg_split('/\W+/u', mb_strtolower($s), -1, PREG_SPLIT_NO_EMPTY);
    return array_count_values($words);
}
