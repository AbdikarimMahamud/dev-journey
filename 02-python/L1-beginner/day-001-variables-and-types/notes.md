# Python Day 1: Variables and Data Types

## Variables
A variable is a name that points to a value. No keyword is needed to declare one.

```python
name = "Ada"
age = 36
price = 9.99
is_admin = False
```

Python is **dynamically typed**: the type belongs to the value, not the name. You can rebind a name to a different type (`age = "thirty"`), though you usually shouldn't.

## Naming
- Use `snake_case` for variables and functions, `UPPER_CASE` for constants, `PascalCase` for classes.
- Names can't start with a digit and can't be reserved words like `class` or `for`.

## Core built-in types
| Type | Example | Mutable? |
|---|---|---|
| `int` | `42` | No |
| `float` | `3.14` | No |
| `str` | `"text"` | No |
| `bool` | `True` | No |
| `NoneType` | `None` | No |
| `list` | `[1, 2]` | Yes |
| `dict` | `{"a": 1}` | Yes |
| `tuple` | `(1, 2)` | No |
| `set` | `{1, 2}` | Yes |

## Everything is an object
Even numbers and functions are objects. `type(x)` shows the type and `id(x)` the object's identity.

## Mutable vs immutable
Assigning a list to a second name does not copy it. Both names point to the same list, so changing one changes the other. Use `.copy()` or `list(x)` for a copy.

## Useful checks
`type(x)`, `isinstance(x, int)`, `len(x)`, `print(x)`, `repr(x)`.
