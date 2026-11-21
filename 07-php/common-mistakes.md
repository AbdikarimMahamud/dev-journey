# Common PHP Mistakes

1. **Using `==` instead of `===`.** Loose comparison causes surprising results.
2. **Building SQL with string concatenation.** Use PDO prepared statements.
3. **Printing user input without escaping.** Use `htmlspecialchars`.
4. **Storing passwords with `md5` or `sha1`.** Use `password_hash`.
5. **Leaving `display_errors` on in production.** Log errors instead.
6. **Calling `session_start()` after output.** Headers must be sent first.
7. **Using `strlen` on UTF-8 text.** Use `mb_strlen`.
8. **Trusting `$_FILES['name']`.** Validate type and size, and rename uploads.
9. **Forgetting `exit` after `header('Location: ...')`.** Code keeps running.
10. **Using `global` variables.** Pass values as parameters.
11. **Not checking array keys.** Use `??` or `isset` to avoid warnings.
12. **Committing `vendor/` or `.env`.** Add them to `.gitignore`.
