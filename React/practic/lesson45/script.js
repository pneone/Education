'use strict';

const btn = document.querySelector('#btn');

// btn.onclick = function(){
//     alert('Click!');
// };

btn.addEventListener('click', () =>{
    alert('Click!');
});

btn.addEventListener('click', (e) =>{
    e.target.remove();
});

const link = document.querySelector('a');

link.addEventListener('click', (e) => {
    e.preventDefault();
});