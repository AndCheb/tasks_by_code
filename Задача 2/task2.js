let a = 5; // сторона квадрата
let S = a * a; // площадь квадрата

// Функция возвращающая площадь квадрата
function squareArea(a) {
  return Math.pow(a, 2);
}

// Решение с использованием стрелочной функции
const squareAreaR = a => a * a;