
const btns = document.querySelectorAll('button'),
      wrapper = document.querySelector('.btn-block');

// console.log(btns[0].classList.length);
// console.log(btns[0].classList.item[0]);
// console.log(btns[0].classList.add('red', 'fff'));
// console.log(btns[0].classList.remove('blue'));
// console.log(btns[0].classList.toggle('blue'));


// console.log(btns[1].classList.add('red', 'fff'));

// if (btns[1].classList.contains('red')){
//     console.log('red');
// }

btns[1].addEventListener('click', () =>{
    btns[1].classList.toggle('red');
});

wrapper.addEventListener('click', (e) =>{
    if(e.target && e.target.tagName == 'BUTTON'){
        console.log('Hello');
    }
});


const btn = document.createElement('button');
btn.classList.add('red');

wrapper.append(btn);

