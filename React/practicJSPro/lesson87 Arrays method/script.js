'use strict';

// filter 

// const names = ['Ivan', 'Ann', 'Ksenia', 'Alexander'];

// const shortNames = names.filter((name) =>{
//     return name.length < 5;
// });

// console.log(shortNames); // ==> [ 'Ivan', 'Ann' ]

// map

// const answers = ['IvAn', 'AnnA', 'HELLo'];

// const res = answers.map((item) => {
//     return item.toLowerCase();
// });

// console.log(res); // ==> [ 'ivan', 'anna', 'hello' ]

// every/some

// const some = [4, 'ss', 'ssssfe'];

// console.log(some.some(item =>{
//     return typeof(item) == "number";
// })); // ==> true

// console.log(some.every(item =>{
//     return typeof(item) == "number";
// })); // ==> false

// reduce

// const arr = [4, 5, 1, 3, 2, 6];
//                        //0      4
//                        //4      5
//                        //9      1
//                        //10     3
// const res = arr.reduce((sum, current) => {
//     return sum + current;
// });

// console.log(res); // ==> 21

// const arr = [4, 5, 1, 3, 2, 6];
//                        //3      4
//                        //4      5
//                        //9      1
//                        //10     3
// const res = arr.reduce((sum, current) => {
//     return sum + current;
// }, 3);

// console.log(res); // ==> 24

// const arr = ['apple', 'pear', 'plum'];

// const res = arr.reduce((sum, current) => {
//     return `${sum}, ${current}`;
// });

// console.log(res); // ==> apple, pear, plum




// const obj = {
//     ivan: 'persone',
//     ann: 'persone',
//     dog: 'animal', 
//     cat: 'animal' 
// };

// const newArr = Object.entries(obj)
// .filter((item) => {
//     return item[1] === 'persone';
// })
// .map(item => {
//     return item[0];
// });

// console.log(newArr); // ==> [ 'ivan', 'ann' ]







