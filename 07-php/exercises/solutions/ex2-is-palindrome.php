<?php
declare(strict_types=1);

function isPalindrome(string $s): bool
{
    $clean = preg_replace('/[^a-z0-9]/', '', strtolower($s));
    return $clean === strrev($clean);
}
