# Strings are immutable sequences of characters

s = "  Python Is Fun  "

print(s.strip())
print(s.strip().lower())
print(s.strip().upper())
print(s.strip().title())
print(s.replace("Fun", "Great").strip())
print("Python" in s)

word = "python"
print(word[0], word[-1])       # p n
print(word[1:4])               # yth
print(word[::-1])              # nohtyp  (reversed)
print(len(word))

# Split and join
csv = "red,green,blue"
colors = csv.split(",")
print(colors)
print(" | ".join(colors))

# Checking content
print("abc123".isalnum(), "123".isdigit(), "abc".isalpha())
print("hello world".startswith("hello"), "file.txt".endswith(".txt"))

# Strings can't be modified in place
try:
    word[0] = "P"
except TypeError as err:
    print("Error:", err)

# Multi-line strings
poem = """Line one
Line two"""
print(poem)
