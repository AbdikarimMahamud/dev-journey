# Variables and assignment in Python

name = "Ada"
age = 36
print(name, age)

# Multiple assignment
x, y, z = 1, 2, 3
a = b = 0
print(x, y, z, a, b)

# Swapping without a temp variable
x, y = y, x
print(x, y)  # 2 1

# Augmented assignment
count = 0
count += 1
count *= 5
print(count)  # 5

# Constants are a naming convention, not enforced
MAX_RETRIES = 3
print(MAX_RETRIES)

# Names are case sensitive
value = 1
Value = 2
print(value, Value)

# Rebinding to another type is allowed (but confusing)
data = 10
data = "ten"
print(type(data))
