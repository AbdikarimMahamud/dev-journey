// var, let and const: the three ways to declare a variable

const appName = "dev-journey"; // cannot be reassigned
let visits = 0;                // can be reassigned
var legacy = "avoid me";       // function scoped, avoid in new code

visits = visits + 1;
visits += 1;
visits++;
console.log(appName, visits, legacy); // dev-journey 3 avoid me

// const does not make objects immutable, only the binding
const user = { name: "Ada" };
user.name = "Grace"; // allowed: mutating the object
console.log(user);   // { name: 'Grace' }

try {
  appName = "other"; // TypeError
} catch (err) {
  console.log(err.name + ": " + err.message);
}
