function makaLooping(n) {
  for (let i = 1; i <= n; i++) {
    if (i % 3 === 0) {
      console.log("Mari");
    } else if (i % 5 === 0) {
      console.log("Bekarya");
    } else {
      console.log(i);
    }
  }
}

makaLooping(100);
