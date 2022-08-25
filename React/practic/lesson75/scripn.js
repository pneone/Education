'use strict';

function User(name, id){
    this.name = name;
    this.id = id;
    this.human = true;
    this.hello = function(){
        console.log(`hello, ${this.name}`);
    };
}

User.prototype.exit = function(){
    console.log(`${this.name} logout`);
};


const ivan = new User('Ivan', 25);
const evgen = new User('Evgen', 20);

ivan.exit();

console.log(evgen);
console.log(ivan);