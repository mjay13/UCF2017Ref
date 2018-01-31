// Instruction:

// Write a (pseudocode!) implementation of quick-sort. You can assume that partition and select_pivot functions are already written for you.

// Keep in mind the idea of recursion: https://en.wikipedia.org/wiki/Recursion_(computer_science)#Recursive_functions_and_algorithms

// Don't sweat it if you're unsure of your solution—pseudocode affords a lot of freedom, and we'll review things together shortly. Regardless, be prepared to explain your work!

// ===============================================
// RUN THIS USING NODE
// ===============================================

// ================================================
// TEST CASES
// ================================================

// Case 1 - Small Set of Numbers
var arraySize = 40;

// // Case 2 - Large set of Numbers
// var arraySize = 400000;

var array = [];
for (var index = 0; index < arraySize; index++) {
  var randomNumber = Math.round(Math.random() * arraySize);

  array.push(randomNumber);
}

// ================================================
// SOLUTION - Selection Sort
// ================================================

function quickSort(items) {
  items.sort();
  return items;
}

// ================================================
// FUNCTION CALL
// ================================================
console.log("PRE-SORT");
console.log(array.join(" "));
console.log("---------------------------");
console.log("POST-SORT");
console.log(quickSort(array).join(" "));
