const rectangles = [
  { a: 10, b: 12 },
  { a: 11, b: 19 },
  { a: 13, b: 15 },
  { a: 32, b: 13 },
  { a: 10, b: 19 },
  { a: 11, b: 12 },
  { a: 22, b: 21 },
  { a: 40, b: 12 },
];

const area = [];

rectangles.forEach(item => {
  area.push(2 * (item.a + item.b));
});

const result = rectangles[area.findIndex(i => i === Math.min(...area))];