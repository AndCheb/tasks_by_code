const evenDigit = k => k % 2 === 0;

const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
let even = 0;

for (key of arr) {
  if (evenDigit(key)) even++;
}