const A = -2;
const B = 5;

if (A < B)
  for (let i = A, j = 1; i <= B; i++, j++) {
    console.log(i);
    if (i === B) console.log(`Всего чисел: ${j}`);
  }