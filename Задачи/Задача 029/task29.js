let x = -10;

const num = x => x > 0 ? ++x : x < 0 ? x -= 2 : 10;

console.log(x = num(x));