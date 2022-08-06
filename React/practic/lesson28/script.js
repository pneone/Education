"use strict";


const str = 'test';

console.log(str.toUpperCase()); // верхний регистр 
console.log(str.toLowerCase()); // нижний регистр


let fruit = 'Some fruit';

console.log(fruit.indexOf('fruit')); 
console.log(fruit.indexOf('q'));

const logg  = 'Hello world';

console.log(logg.slice(6, 11));
console.log(logg.substring(6, 11));

console.log(logg.slice(2));
console.log(logg.slice(-6));



console.log(logg.substr(6, 5));

const num = 12.5;
console.log(Math.round(num));


const test = '12.2px';

console.log(parseFloat(test));
console.log(parseInt(test));


