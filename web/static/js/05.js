"use strict";

let name = "Ilya";

console.log(typeof 1);
console.log(typeof name);

try {
    alert(`Hello ${1}`);
} catch (error) {
    console.log(error.message);
}

try {
    alert(`Hello ${"name"}`);
} catch (error) {
    console.log(error.message);
}

try {
    alert(`Hello ${name}`);
} catch (error) {
    console.log(error.message);
}
