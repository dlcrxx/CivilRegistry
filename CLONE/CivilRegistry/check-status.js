function generateNumericReference(length = 10) {
  let ref = '';
  for (let i = 0; i < length; i++) {
    ref += Math.floor(Math.random() * 10); // Appends a random digit (0-9)
  }
  return ref;
}

console.log(generateNumericReference()); // Example: "4937281056"
