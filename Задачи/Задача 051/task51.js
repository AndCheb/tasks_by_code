const a = 4;
const b = 11;

const listOfNumbers = [];

for (let i = b - 1; i > a; i--) {
  listOfNumbers.push(i);
}

console.dir({ listOfNumbers, 'amount of numbers': listOfNumbers.length });