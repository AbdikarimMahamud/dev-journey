# Converting between types explicitly

print(int("42"), float("3.5"), str(99), bool(0), bool("hi"))
print(int(3.9))        # 3 (truncates)
print(list("abc"))     # ['a', 'b', 'c']
print(tuple([1, 2]))
print(set([1, 1, 2]))  # {1, 2}

# Python does not coerce strings and numbers silently
try:
    print("5" + 3)
except TypeError as err:
    print("Error:", err)

print("5" + str(3))    # 53
print(int("5") + 3)    # 8
print("5" * 3)         # 555 (string repetition)

# Safe parsing
def to_int(text, default=0):
    try:
        return int(text)
    except ValueError:
        return default

print(to_int("12"), to_int("abc"), to_int("  7 "))

# Invalid conversions raise ValueError
try:
    int("3.5")
except ValueError as err:
    print("Error:", err)
