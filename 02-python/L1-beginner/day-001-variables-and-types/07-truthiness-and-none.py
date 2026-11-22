# Truthy, falsy values and None

falsy = [0, 0.0, "", [], {}, set(), (), None, False]
for v in falsy:
    print(f"{v!r:>8} is falsy: {not v}")

# Everything else is truthy, including "0" and [0]
print(bool("0"), bool([0]))

# None means "no value"; compare with 'is'
result = None
if result is None:
    print("no result yet")

# Using 'or' for defaults (careful: 0 and "" are falsy too)
username = "" or "guest"
print(username)

# Safer default pattern
def greet(name=None):
    if name is None:
        name = "stranger"
    return f"Hello, {name}"

print(greet(), greet("Ada"))

# Chained comparisons
age = 25
print(18 <= age < 65)

# and / or return operands, not just booleans
print(0 or "fallback", "a" and "b")
