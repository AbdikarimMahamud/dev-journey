const test = require("node:test");
const assert = require("node:assert/strict");

const { swap } = require("../solutions/ex1-swap");
const { describeType } = require("../solutions/ex2-describe-type");
const { formatPrice } = require("../solutions/ex3-format-price");

test("swap returns values in reverse order", () => {
  assert.deepEqual(swap(1, 2), [2, 1]);
  assert.deepEqual(swap("a", "b"), ["b", "a"]);
});

test("describeType handles tricky cases", () => {
  assert.equal(describeType(null), "null");
  assert.equal(describeType([]), "array");
  assert.equal(describeType({}), "object");
  assert.equal(describeType(undefined), "undefined");
  assert.equal(describeType(5), "number");
});

test("formatPrice always shows two decimals", () => {
  assert.equal(formatPrice("Coffee", 4.5, 3), "3 x Coffee = $13.50");
  assert.equal(formatPrice("Pen", 2, 1), "1 x Pen = $2.00");
});
