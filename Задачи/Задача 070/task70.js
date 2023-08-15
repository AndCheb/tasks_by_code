const unit = 6;
const length = 1.22;

const lengthInMeters = (unit, length) => {
  switch(unit) {
    case 1: return length / 10;
    case 2: return length * 1000;
    case 3: return length;
    case 4: return length / 1000;
    case 5: return length / 100;
    default: return 'unknown value';
  }
}