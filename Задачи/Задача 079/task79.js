const c = 'y'.charCodeAt();

const result = {
  [c - 1]: String.fromCharCode(c - 1),
  [c]: 'y',
  [c + 1]: String.fromCharCode(c + 1),
}