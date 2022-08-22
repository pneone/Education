'use strict';

const box = document.getElementById('box'),
      btns = document.getElementsByTagName('button'),
      circles = document.getElementsByClassName('circle'),
      hearts = document.querySelectorAll('.heart'),
      heart = document.querySelector('.heart'),
      wrapper = document.querySelector('.wrapper');


box.style.backgroundColor = 'blue';
box.style.width = '400px';


hearts.forEach(item =>{
    item.style.backgroundColor = 'blue';
});

const div = document.createElement('div');
// const text = document.createTextNode('i was heare');

div.classList.add('black');


wrapper.append(div);
// wrapper.prepend(div);

// hearts[1].before(div);
// hearts[1].after(div);

// circles[0].remove();

// hearts[0].replaceWith(circles[1]);

// document.body.append(div);

div.innerHTML = '<h4>Hello World!</h4>';

// div.textContent = 'Hello!';

div.insertAdjacentHTML('', '<h2>Hello</h2>');