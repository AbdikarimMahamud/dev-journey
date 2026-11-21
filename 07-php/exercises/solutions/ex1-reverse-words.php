<?php
declare(strict_types=1);

function reverseWords(string $s): string
{
    $words = preg_split('/\s+/', trim($s), -1, PREG_SPLIT_NO_EMPTY);
    return implode(' ', array_reverse($words));
}
