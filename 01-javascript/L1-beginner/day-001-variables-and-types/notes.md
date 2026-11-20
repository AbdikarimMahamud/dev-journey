# Day 1: Variables and Data Types (JavaScript)

## Variables
A variable is a named container for a value.

| Keyword | Reassign? | Redeclare? | Scope | Use it for |
|---|---|---|---|---|
| `const` | No | No | Block | Default choice |
| `let` | Yes | No | Block | Values that change |
| `var` | Yes | Yes | Function | Legacy code only |

**Rule of thumb:** start with `const`, switch to `let` only when you must reassign.

## The 7 primitive types
1. `string`: text
2. `number`: integers and decimals (also `NaN`, `Infinity`)
3. `boolean`: `true` / `false`
4. `undefined`: declared but not assigned
5. `null`: intentionally empty
6. `bigint`: integers beyond 2^53 - 1
7. `symbol`: unique identifiers

Everything else (arrays, objects, functions) is an **object** type.

## Primitives vs references
Primitives are copied by value. Objects are copied by reference, so two variables can point at the same object.

## Naming
Use `camelCase`, start with a letter, `_` or `$`, and make names describe the value (`userCount`, not `x`).
