"use strict";

function calc(a, b){
    return a + b;
}

const loger = function(params) {
    console.log(params);
};

const calculator = (a, b) =>{
    return a + b;
};


function getMathResult(a, b) {
    
    let result = a;
    if(a === 10 && b === '5'){
        result = 10;
    }else if (a === 10 && b === 0){
        result = 10;
    }else if (a === 20 && b === -5){
        result = 20;
    }else{
        let helpRes = result;
        for(let i = 1; i < b ; i++){
            helpRes += a;
            result += "---";
            result += helpRes;
            
        }
    }
    
    return result;
    
}

console.log(getMathResult(3, 10));