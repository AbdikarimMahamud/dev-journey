# Real world: build a formatted receipt from raw order data

TAX_RATE = 0.16

order = [
    {"item": "Coffee", "price": 4.50, "qty": 2},
    {"item": "Croissant", "price": 3.25, "qty": 3},
    {"item": "Orange juice", "price": 5.00, "qty": 1},
]

def line_total(line):
    return line["price"] * line["qty"]

def build_receipt(lines, tax_rate):
    subtotal = sum(line_total(l) for l in lines)
    tax = subtotal * tax_rate
    out = [f"{'Item':<15}{'Qty':>4}{'Total':>10}", "-" * 29]
    for l in lines:
        out.append(f"{l['item']:<15}{l['qty']:>4}{line_total(l):>10.2f}")
    out.append("-" * 29)
    out.append(f"{'Subtotal':<19}{subtotal:>10.2f}")
    out.append(f"{'Tax (16%)':<19}{tax:>10.2f}")
    out.append(f"{'TOTAL':<19}{subtotal + tax:>10.2f}")
    return "\n".join(out)

print(build_receipt(order, TAX_RATE))
