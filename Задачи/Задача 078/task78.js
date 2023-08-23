const n = 8;
const a = 3;
const d = 4;

const result = [a, a + d];

for (let i = 2; i <= n; i++) {
  result.push(a + i * d);
}