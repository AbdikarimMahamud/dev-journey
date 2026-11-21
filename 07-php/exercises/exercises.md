# PHP Exercises

Write your own version first, then compare with `solutions/`. Run `php 07-php/tests/run-tests.php` to check them.

## 1. reverseWords
`reverseWords(string $s): string` reverses the order of words.
`"hello big world"` becomes `"world big hello"`. Extra spaces should collapse.

## 2. isPalindrome
`isPalindrome(string $s): bool` ignores case, spaces and punctuation.
`"A man, a plan, a canal: Panama"` is `true`.

## 3. wordCount
`wordCount(string $s): array` returns each lowercase word with its count.
`"the cat and the hat"` gives `['the' => 2, 'cat' => 1, 'and' => 1, 'hat' => 1]`.

## 4. BankAccount
A class with `deposit(float)`, `withdraw(float)` and `balance(): float`.
- Deposits and withdrawals must be positive, otherwise throw `InvalidArgumentException`.
- Withdrawing more than the balance throws `RuntimeException`.

## 5. groupBy
`groupBy(array $items, string $key): array` groups rows by a field.

## Stretch goals
- Add a `transfer` method between two accounts.
- Make `wordCount` sort by count descending.
