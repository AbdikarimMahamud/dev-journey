def format_price(name, price, qty):
    if qty < 0:
        raise ValueError("qty must not be negative")
    return f"{qty} x {name} = ${price * qty:,.2f}"
