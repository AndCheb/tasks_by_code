let a = 3;
let b = 5;
let c = 8;

if (a < b && b < c) {
  a *= 2;
  b *= 2;
  c *= 2;
} else {
  a = -a;
  b = -b;
  c = -c;
}