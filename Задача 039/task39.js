const a = [2, 4, 3, 1, 6];

const PowerA234 = x => [Math.pow(x, 2), Math.pow(x, 3), Math.pow(x, 4)];
a.forEach(i => console.log(PowerA234(i)));