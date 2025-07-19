function diagonalDifference(arr) {
  let x = 0;
  let y = 0;

  for (let i = 0; i < arr.length; i++) {
    x += arr[i][i];
    y += arr[i][arr.length - 1 - i];
  }

  return Math.abs(x - y);
}
