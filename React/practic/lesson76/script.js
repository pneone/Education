'use strict';

// function showThis(a, b){
//     console.log(this);

//     function sum (){
//         console.log(this);
//         return a + b;
//     }

// }
// showThis(4, 5);

// //1) Обычная функция: this = window, но если use strict = undefined 


// const obj = {
//     a: 20,
//     b: 15,
//     sum: function(){
//         console.log(this);
//     }

// };
// obj.sum();

// //2) Контекст у методов объекта - сам объект 


// function User(name, id){
//     this.name = name;
//     this.id = id;
//     this.human = true;

// }

// let ivan = new User('Ivan', 23);

// //3) this в конструкторах и класах - это новый экземпляр объекта 
// console.log('=============');
// function sayName(surname){
    
//     console.log(this);
//     console.log(this.name + ' ' + surname);
// }

// const user = {
//     name: 'John',
//     age: 25
// };

// sayName.call(user, 'Deer');
// sayName.apply(user, ['Deer']);

// function count(num){
//     return this * num;
// }

// const double = count.bind(2);
// console.log(double(3));
// console.log(double(13));

// //4) Ручная привязк this: call, apply, bind

const btn = document.querySelector('button');

btn.addEventListener('click', function(){
    console.log(this);
    this.style.backgroundColor = 'red';
});

const obj = {
    num: 5,
    sayNum: function(){
        const say = () =>{
            console.log(this);
        };

        say();
    } 
};

obj.sayNum();

const double = a => a * 2;