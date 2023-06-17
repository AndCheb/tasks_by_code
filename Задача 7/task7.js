const a = -1;
const b = 0;
const c = 1;
const d = [-1, 1, 2];

let pos = 0;
let neg = 0;

if (a != 0) a > 0 ? pos++ : neg++;
if (b != 0) b > 0 ? pos++ : neg++;
if (c != 0) c > 0 ? pos++ : neg++;

console.log(`Positive: ${pos}, negative: ${neg}`); // Positive: 1, nagative: 1

// Функция принимающая набор чисел или массив
const posAndNegNums = (...n) =>
  `Positive: ${n.filter(i => i > 0).length}, nagative: ${n.filter(i => i < 0).length}`;

console.log(posAndNegNums(a, b, c)); // Positive: 1, nagative: 1
console.log(posAndNegNums(...d)); // Positive: 2, nagative: 1