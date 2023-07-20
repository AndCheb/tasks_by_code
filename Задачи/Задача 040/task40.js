const a = 1;
const b = 4;
const c = 7;

function sumRange(x, y) {
  if (x > y) return 0;
  let sum = 0;
  while (x <= y) {
    sum += x;
    x++;
  }
  return sum;
}