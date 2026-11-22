# Day 1 Exercises

Try each one yourself before looking at `solutions/`. Run the tests with:

```bash
python -m unittest discover -s 02-python/L1-beginner/day-001-variables-and-types/tests -p "test_*.py"
```

## Exercise 1: swap
Write `swap(a, b)` that returns the two values in reverse order.

## Exercise 2: type_name
Write `type_name(value)` that returns the type as a lowercase string, but returns `"none"` for `None` and `"list"` for lists. For booleans return `"bool"` (not `"int"`).

## Exercise 3: format_price
Write `format_price(name, price, qty)` returning something like `"3 x Coffee = $13.50"`. Always show 2 decimals and use thousands separators for large totals, e.g. `"2 x Laptop = $2,400.00"`.

## Stretch
- Write `to_int(text, default=0)` that never raises.
- Make `format_price` reject negative quantities with `ValueError`.
