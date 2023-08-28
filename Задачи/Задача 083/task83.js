const details = [
  { m: 8, v: 4 },
  { m: 4, v: 2 },
  { m: 1, v: 1 },
  { m: 6, v: 3 },
  { m: 9, v: 1 },
];

const maximumDensity = items => {
  const denisty = [];
  let maxDenisty = 0;
  for (const item of items) {
    denisty.push(item.m / item.v);
  }
  maxDenisty = Math.max(...denisty);
  return { Number: denisty.indexOf(maxDenisty) + 1, Denisty: maxDenisty };
}