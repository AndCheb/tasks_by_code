const A = 30;
const B = 11;

if (A >= B) {
  let count = 0;

  for (let i = B; i <= A; i += B)
    count += B;

  console.log(`Длина незанятой части отрезка A = ${A - count}`);
}