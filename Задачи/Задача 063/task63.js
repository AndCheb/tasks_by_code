const n = 12;
let result = 1;

for (let i = 2; i <= n; i++)
  result += 1 / i;

result = +result.toFixed(2);