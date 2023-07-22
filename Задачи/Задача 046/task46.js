const x = 45;

const sum = x.toString().split('').reduce((total, value) => total += +value, 0);
const multipl = x.toString().split('').reduce((total, value) => total *= +value, 1);
