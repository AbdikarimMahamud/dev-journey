# Common Mistakes: Variables and Types

1. **Using `var` out of habit.** It leaks out of blocks. Use `const`/`let`.
2. **Using `==`.** `0 == ""` is true. Use `===`.
3. **Thinking `const` means immutable.** It only stops reassignment, not mutation.
4. **`typeof null === "object"`.** Check `value === null` explicitly.
5. **Comparing floats directly.** `0.1 + 0.2 !== 0.3`. Compare with a tolerance or use integers (cents).
6. **`"5" + 3` is `"53"`.** Convert inputs with `Number()` before doing math.
7. **Using `||` for defaults.** It overrides valid values like `0` and `""`. Use `??`.
8. **Global `isNaN("abc")`.** It coerces first. Use `Number.isNaN`.
