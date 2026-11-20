// A tour of the primitive types and a few object types

const text = "hello";
const age = 30;
const price = 19.99;
const isActive = true;
let notAssigned;
const empty = null;
const huge = 9007199254740993n;
const id = Symbol("id");

console.log(typeof text);        // string
console.log(typeof age);         // number
console.log(typeof price);       // number (no separate float type)
console.log(typeof isActive);    // boolean
console.log(typeof notAssigned); // undefined
console.log(typeof empty);       // object  <- historical quirk
console.log(typeof huge);        // bigint
console.log(typeof id);          // symbol

const list = [1, 2, 3];
const person = { name: "Ada", age: 36 };
function greet() {}

console.log(typeof list);   // object
console.log(typeof person); // object
console.log(typeof greet);  // function

// Floating point surprise
console.log(0.1 + 0.2);                           // 0.30000000000000004
console.log(Math.abs(0.1 + 0.2 - 0.3) < Number.EPSILON); // true
