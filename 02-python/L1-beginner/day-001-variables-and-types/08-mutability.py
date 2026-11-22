# Mutable vs immutable: a classic source of bugs

# Immutable: reassigning creates a new object
a = "hello"
b = a
b += " world"
print(a, "|", b)  # a is unchanged

# Mutable: two names, one list
list_a = [1, 2, 3]
list_b = list_a
list_b.append(4)
print(list_a)  # [1, 2, 3, 4]
print(list_a is list_b)  # True

# Make a real copy
list_c = list_a.copy()
list_c.append(5)
print(list_a, list_c)

# Shallow copy gotcha with nested lists
nested = [[1], [2]]
shallow = nested.copy()
shallow[0].append(99)
print(nested)  # [[1, 99], [2]]

import copy
deep = copy.deepcopy(nested)
deep[0].append(100)
print(nested, deep)

# Mutable default argument trap
def bad(item, bucket=[]):
    bucket.append(item)
    return bucket

print(bad(1), bad(2))  # [1, 2] [1, 2]  <- surprise

def good(item, bucket=None):
    if bucket is None:
        bucket = []
    bucket.append(item)
    return bucket

print(good(1), good(2))  # [1] [2]
