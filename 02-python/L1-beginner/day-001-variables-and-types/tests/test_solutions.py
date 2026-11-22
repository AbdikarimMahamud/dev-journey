import os
import sys
import unittest

sys.path.insert(0, os.path.join(os.path.dirname(__file__), "..", "solutions"))

from ex1_swap import swap
from ex2_type_name import type_name
from ex3_format_price import format_price


class TestSwap(unittest.TestCase):
    def test_swaps_values(self):
        self.assertEqual(swap(1, 2), (2, 1))
        self.assertEqual(swap("a", "b"), ("b", "a"))


class TestTypeName(unittest.TestCase):
    def test_basic_types(self):
        self.assertEqual(type_name(5), "int")
        self.assertEqual(type_name("x"), "str")
        self.assertEqual(type_name([1]), "list")

    def test_none_and_bool(self):
        self.assertEqual(type_name(None), "none")
        self.assertEqual(type_name(True), "bool")


class TestFormatPrice(unittest.TestCase):
    def test_two_decimals(self):
        self.assertEqual(format_price("Coffee", 4.5, 3), "3 x Coffee = $13.50")

    def test_thousands_separator(self):
        self.assertEqual(format_price("Laptop", 1200, 2), "2 x Laptop = $2,400.00")

    def test_negative_quantity(self):
        with self.assertRaises(ValueError):
            format_price("Pen", 1, -1)


if __name__ == "__main__":
    unittest.main()
