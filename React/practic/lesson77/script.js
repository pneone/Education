'use strict';

class Rectangle{
    constructor(height, width){
        this.height = height;
        this.width = width;
    }

    calcArea(){
        return this.height * this.width;
    }
}

class ColoredRectangleWidthText extends Rectangle{
    constructor(height, width, text, bgColor){
        super(height, width);
        this.text = text;
        this.bgColor= bgColor;
    }

    showMyProps(){
        console.log(`Width => ${this.width}, height => ${this.height}, text => ${this.text}, color => ${this.bgColor}`);
    }
}

const squere = new Rectangle(10, 10); 
const long = new Rectangle(20, 100);

console.log(long.calcArea());
console.log(squere.calcArea()); 

const rect = new ColoredRectangleWidthText(50, 100, 'Some txt', 'black');

rect.showMyProps();