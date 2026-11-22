# Numbers and arithmetic

print(7 + 3, 7 - 3, 7 * 3)
print(7 / 2)      # 3.5   (true division)
print(7 // 2)     # 3     (floor division)
print(7 % 2)      # 1     (remainder)
print(2 ** 10)    # 1024  (power)
print(-7 // 2)    # -4    (floors toward negative infinity)

print(abs(-5), round(3.14159, 2), max(3, 9, 4), min(3, 9, 4))
print(divmod(17, 5))   # (3, 2)

import math
print(math.sqrt(16), math.ceil(2.1), math.floor(2.9), math.pi)

# Readable big numbers
population = 8_000_000_000
print(population)

# Rounding uses banker's rounding for .5
print(round(0.5), round(1.5), round(2.5))  # 0 2 2

# Average of a list
scores = [88, 92, 79]
print(sum(scores) / len(scores))
