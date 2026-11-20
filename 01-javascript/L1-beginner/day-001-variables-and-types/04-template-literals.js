// Template literals use backticks and support interpolation

const name = "Ada";
const items = 3;
const unit = 4.5;

console.log(`Hello, ${name}!`);
console.log(`Total: $${(items * unit).toFixed(2)}`);

// Multi-line strings
const message = `Dear ${name},
Your order of ${items} items has shipped.
Thanks!`;
console.log(message);

// Expressions work inside ${}
console.log(`Status: ${items > 2 ? "bulk order" : "small order"}`);

// Useful string methods
const s = "  JavaScript Rocks  ";
console.log(s.trim());              // "JavaScript Rocks"
console.log(s.trim().toLowerCase());
console.log(s.includes("Rocks"));   // true
console.log(s.trim().split(" "));   // [ 'JavaScript', 'Rocks' ]
console.log("ab".repeat(3));        // "ababab"
