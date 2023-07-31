const nums = [4, 5, 7, 8, 9, 11, 14, 16, 22, 28];

const isSquare = k => {
  const o = {};
  k.forEach(i => o[i] = Number.isInteger(Math.sqrt(i)));
  return o;
};