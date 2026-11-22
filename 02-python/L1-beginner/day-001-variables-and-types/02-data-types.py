# A tour of the core types

values = [42, 3.14, "hello", True, None, [1, 2], {"a": 1}, (1, 2), {1, 2}]

for v in values:
    print(f"{v!r:<12} -> {type(v).__name__}")

# bool is a subclass of int
print(True + True)               # 2
print(isinstance(True, int))     # True

# Big integers just work
print(2 ** 100)

# Float precision
print(0.1 + 0.2)                 # 0.30000000000000004
print(round(0.1 + 0.2, 2))       # 0.3

from decimal import Decimal
print(Decimal("0.1") + Decimal("0.2"))  # 0.3

# isinstance is better than type() == for checks
print(isinstance(3.0, (int, float)))
