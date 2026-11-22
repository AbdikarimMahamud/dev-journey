# Python Cheatsheet

## Types
`int float str bool None list tuple dict set`

## Conversions
```python
int("5")  float("2.5")  str(10)  list("abc")  bool(x)
```

## Math
```python
7 / 2   # 3.5      7 // 2  # 3      7 % 2  # 1      2 ** 3  # 8
round(x, 2)  abs(x)  max(a, b)  sum(items)  divmod(a, b)
```

## Strings
```python
s.strip()  s.lower()  s.split(",")  ",".join(items)  s.replace("a", "b")
s[0]  s[-1]  s[1:4]  s[::-1]  "x" in s
f"{name}  {price:,.2f}  {ratio:.1%}  {n:03d}"
```

## Checks
```python
isinstance(x, int)    x is None    len(x)    type(x).__name__
```

## Copying
```python
b = a.copy()      # shallow
import copy; copy.deepcopy(a)
```

## Run things
```bash
python file.py
python -m unittest discover
```
