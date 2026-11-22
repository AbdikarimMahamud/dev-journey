# Day 1 Quiz

1. What does `7 // 2` return? And `7 / 2`?
2. Which of these is immutable: `list`, `tuple`, `dict`?
3. What is printed by `print(bool("0"))`?
4. Why is `def f(x, items=[])` risky?
5. How do you check whether a value is `None`?
6. What is the result of `"5" + 3`?

<details>
<summary>Answers</summary>

1. `3` and `3.5`.
2. `tuple`.
3. `True`, because any non-empty string is truthy.
4. The default list is created once and shared across all calls.
5. `value is None`.
6. A `TypeError`, because Python doesn't coerce strings and numbers.

</details>
