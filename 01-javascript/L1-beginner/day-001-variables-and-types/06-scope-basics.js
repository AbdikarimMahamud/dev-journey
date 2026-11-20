// Scope: where a variable can be seen

const globalValue = "visible everywhere in this file";

function demo() {
  const local = "only inside demo";
  if (true) {
    let blockScoped = "only inside this block";
    var functionScoped = "visible in the whole function";
    console.log(blockScoped);
  }
  console.log(functionScoped); // works
  // console.log(blockScoped); // ReferenceError
  console.log(local, globalValue);
}
demo();

// Classic var-in-loop bug
for (var i = 0; i < 3; i++) setTimeout(() => console.log("var:", i)); // 3 3 3
for (let j = 0; j < 3; j++) setTimeout(() => console.log("let:", j)); // 0 1 2

// Hoisting: var is initialised as undefined, let/const are not usable early
console.log(hoisted); // undefined
var hoisted = 1;
