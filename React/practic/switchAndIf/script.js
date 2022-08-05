'use strict';

const num = 50;

if (num < 49) {
    console.log('< 49');
} else if (num > 99) {
    console.log('> 99');
}else{
    console.log('> 49 && < 99');
}

(num == 50) ? console.log(' num = 50') : console.log(' num != 50');

switch (num) {
    case 49:
        console.log('Err!');
        break;
    
    case 100:
        console.log('Err');
        break;
    case 50: 
        console.log('True');
        break;
    default:
        console.log('no info');
}