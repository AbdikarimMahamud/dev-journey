# 22. Best Practices and PSR Standards

## PSR standards
- **PSR-1 / PSR-12:** coding style
- **PSR-4:** autoloading
- **PSR-3:** logger interface
- **PSR-7:** HTTP messages

## Habits
1. Start files with `declare(strict_types=1);`.
2. Add type declarations to parameters and returns.
3. Keep functions short and single-purpose.
4. Do not repeat yourself, extract helpers.
5. Use meaningful names.
6. Validate input, escape output.
7. Do not commit secrets, use `.env`.

## Tools
- **PHP_CodeSniffer** or **PHP CS Fixer** for style
- **PHPStan** or **Psalm** for static analysis
