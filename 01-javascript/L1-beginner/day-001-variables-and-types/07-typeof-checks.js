// typeof is not enough for every type. Reliable checks:

function typeOf(value) {
  if (value === null) return "null";
  if (Array.isArray(value)) return "array";
  if (value instanceof Date) return "date";
  return typeof value;
}

const samples = [42, "hi", true, null, undefined, [], {}, new Date(), () => {}, NaN];
for (const s of samples) console.log(typeOf(s));

// Number-specific checks
console.log(Number.isNaN(NaN));        // true
console.log(Number.isNaN("abc"));      // false (global isNaN("abc") is true!)
console.log(Number.isInteger(5.0));    // true
console.log(Number.isFinite(1 / 0));   // false

// Safe fallback values
const input = undefined;
console.log(input ?? "default");  // nullish coalescing: only null/undefined
console.log(0 || "default");      // "default" (|| treats 0 as falsy)
console.log(0 ?? "default");      // 0
