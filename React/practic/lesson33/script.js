"use strict";

const arr = [14, 22, 23, 42, 15];
arr.sort(comareNum);
console.log(arr);

function comareNum(a, b){
    return a - b;
}


// arr.pop();
// arr.push(10);

// console.log(arr);

// for (let i = 0; i < arr.length; i++) {
//     console.log(arr[i]);
    
// }

// for (let value of arr){
//     console.log(value);
// }

// arr.forEach(function(item, index, arr) {
//     console.log(`${index}: ${item} внутри масива ${arr}`);
// });

// const str = prompt('', '');

// const prod = str.split(', ');

// prod.sort();
// console.log(prod.join('; '));
