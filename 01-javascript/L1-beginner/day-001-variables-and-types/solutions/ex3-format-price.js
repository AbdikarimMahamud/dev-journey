function formatPrice(name, price, qty) {
  return `${qty} x ${name} = $${(price * qty).toFixed(2)}`;
}

module.exports = { formatPrice };
