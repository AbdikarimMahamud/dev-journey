// Real world: build a display-ready profile from raw input

const rawUser = {
  firstName: "  ada ",
  lastName: "LOVELACE",
  age: "36",
  email: "ADA@Example.com ",
  newsletter: undefined,
};

function capitalize(word) {
  const w = word.trim().toLowerCase();
  return w.charAt(0).toUpperCase() + w.slice(1);
}

function buildProfile(user) {
  return {
    fullName: `${capitalize(user.firstName)} ${capitalize(user.lastName)}`,
    age: Number(user.age),
    email: user.email.trim().toLowerCase(),
    newsletter: Boolean(user.newsletter), // undefined -> false
  };
}

console.log(buildProfile(rawUser));
// { fullName: 'Ada Lovelace', age: 36, email: 'ada@example.com', newsletter: false }
