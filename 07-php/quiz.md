# PHP Quiz

1. What is the difference between `==` and `===`?
2. Which function safely stores a password?
3. Why use prepared statements?
4. What does `declare(strict_types=1)` do?
5. What is the difference between a session and a cookie?
6. Which function should you use to print user input safely in HTML?
7. What is the difference between an interface and a trait?
8. What does `??` do?

<details>
<summary>Answers</summary>

1. `==` compares after type juggling, `===` compares value and type.
2. `password_hash()`, checked later with `password_verify()`.
3. They separate SQL from data, which prevents SQL injection.
4. It makes scalar type declarations strict, so `"5"` is not accepted as an `int`.
5. Sessions store data on the server, cookies store data in the browser.
6. `htmlspecialchars()`.
7. An interface defines a contract with no implementation, a trait provides reusable method code.
8. Null coalescing: returns the left side if it exists and is not null, otherwise the right side.

</details>
