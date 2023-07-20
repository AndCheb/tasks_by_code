const n = 27;

function pow3(x) {
  let result = false;

  for (let i = 1; i < x; i++)
    if (Math.pow(3, i) === x) result = true;

  return result;
}