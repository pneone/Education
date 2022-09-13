'use strict';

// const persone = {
//     name: 'Alex',
//     age: 25,

//     get userAge(){
//         return this.age;
//     },

//     set userAge(num){
//         this.age = num;
//     }
// };

// console.log(persone.userAge = 30);
// console.log(persone.userAge);

class User{
    constructor(name, age){
        this.name = name;
        this._age = age;
    }
    
    #surname = 'Petrechenko';

    say(){
        console.log(`Name of user ${this.name} ${this.#surname}, age ${this._age}`);
    }

    get age(){
        return this._age;
    }

    set age(age){
        if(age === 'number' && age > 0 && age < 110){
            this._age = age;
        }else{
            console.log('Err value');
        }
    }

    get surname(){
        return this.#surname;
    }

    set surname(sn){
        this.#surname = sn;
    }
}

const ivan = new User('Ivan', 27);

ivan.say();

ivan.surname = 'Karavoi';

ivan.say();