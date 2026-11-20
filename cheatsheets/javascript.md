# JavaScript Cheatsheet

## Variables
```js
const a = 1;   // default
let b = 2;     // reassignable
```

## Types
`string` `number` `boolean` `undefined` `null` `bigint` `symbol` + objects

## Quick checks
```js
Array.isArray(x)     // arrays
x === null           // null
Number.isNaN(x)      // NaN
typeof x             // everything else
```

## Conversions
```js
Number("42")  String(42)  Boolean(x)  parseInt("42px")
```

## Defaults
```js
value ?? "fallback"   // null/undefined only
value || "fallback"   // any falsy
```

## Strings
```js
`Hi ${name}`  s.trim()  s.split(",")  s.includes("x")  n.toFixed(2)
```
