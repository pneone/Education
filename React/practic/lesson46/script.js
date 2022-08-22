"use strict";

function factorial(num) {
    if (typeof(n) !== 'number' || !Number.isInteger(n)) {
        return "Ошибка, проверьте данные";
    }
    if(num >= 1){
        return num * factorial(num - 1);
    }else{
        return 1;
    }
}


console.log(factorial(5));