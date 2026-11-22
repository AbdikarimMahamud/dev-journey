# Common Mistakes: Variables and Types

1. **Mutable default arguments.** `def f(x, items=[])` shares one list across calls. Use `None` and create the list inside.
2. **Thinking assignment copies.** `b = a` for lists makes two names for one object. Use `.copy()`.
3. **Using `==` to compare with `None`.** Use `is None`.
4. **Forgetting `input()` returns a string.** Convert with `int()` or `float()`.
5. **Integer division confusion.** `/` always returns a float, `//` floors.
6. **Comparing floats exactly.** `0.1 + 0.2 != 0.3`. Use `math.isclose` or `Decimal`.
7. **Modifying a list while looping over it.** Loop over a copy or build a new list.
8. **Shadowing built-ins.** Naming a variable `list`, `str` or `type` breaks later code.
9. **Using `type(x) == int`.** Prefer `isinstance(x, int)`.
10. **Mixing tabs and spaces.** Python 3 refuses it. Use 4 spaces.
