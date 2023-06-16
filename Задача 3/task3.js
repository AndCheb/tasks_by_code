let l = 150; // раcстояние в сантиметрах
let m = Math.floor(l / 100); // количество полных метров

// Функция возвращающая количество полных метров
function numberOfMeters(l) {
  return Math.floor(l / 100);
}

// Решение с использованием стрелочной функции
const numberOfMetersR = l => Math.floor(l / 100);