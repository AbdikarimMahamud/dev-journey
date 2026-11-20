// JavaScript converts types automatically (coercion). Know the rules.

console.log("5" + 3);   // "53"  (+ with a string concatenates)
console.log("5" - 3);   // 2     (- forces numbers)
console.log("5" * "2"); // 10
console.log(true + 1);  // 2

// Explicit conversion is clearer
console.log(Number("42"));      // 42
console.log(Number("abc"));     // NaN
console.log(parseInt("42px"));  // 42
console.log(parseFloat("3.14abc")); // 3.14
console.log(String(123));       // "123"
console.log(Boolean(""));       // false

// Falsy values: false, 0, -0, 0n, "", null, undefined, NaN
// Everything else is truthy, including "0", [] and {}

// == coerces, === does not. Prefer ===
console.log(0 == "0");   // true
console.log(0 === "0");  // false
console.log(null == undefined);  // true
console.log(null === undefined); // false
