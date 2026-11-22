# f-strings are the modern way to format text

name = "Ada"
total = 1234.5
ratio = 0.256

print(f"Hello, {name}!")
print(f"Total: {total:,.2f}")       # 1,234.50
print(f"Ratio: {ratio:.1%}")        # 25.6%
print(f"Padded: [{name:>8}] [{name:<8}] [{name:^8}]")
print(f"ID: {7:03d}")               # 007
print(f"Expression: {2 + 3 * 4}")
print(f"Debug: {total=}")           # total=1234.5

items = ["apple", "pear"]
print(f"Items: {', '.join(items)}")

# Older styles you will see in existing code
print("Hello, %s" % name)
print("Hello, {}".format(name))

# Printing options
print("a", "b", "c", sep="-")
print("no newline", end=" ")
print("continues")
