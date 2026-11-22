def type_name(value):
    if value is None:
        return "none"
    return type(value).__name__.lower()
