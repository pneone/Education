"use strict";

// let num = 50;

// while (num <= 55) {
//     console.log(num);

//     num++;
// }


// do {
    
//     console.log(num);
//     num++;

// } while (num <= 55);


// for (let i = 0; i < num; i += 10) {
    
//     if (i === 6) {
//         // break; выходит из цыкла
//         // continue; пропускает шаг
//     }else{
//         console.log(i);
//     }    
// }

const lines = 5;
let result = '';
// Проверяется именно переменная result, формируйте строку в ней

for (let i = 0; i <= lines; i++) {
    
    if (i === 0) {
        result += '*';
    }else{
        for (let j = 0; j < i + 2; j++) {
            result += '*';
            
        }
    }

    result += "\n";
}
console.log(result);