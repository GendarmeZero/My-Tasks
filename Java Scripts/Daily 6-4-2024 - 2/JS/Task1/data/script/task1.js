// Task1

let sayHello=(name)=> {
    let x="Hello,"+name+"!";
    return x;
}
console.log(sayHello("Alice"));
console.log(sayHello("Bob"));

// Tasks2
let square=function(sq){
    let square=sq*sq;
    return square;
}
console.log(square(2));
console.log(square(5));
// Task3
let multiply=(a,b)=>{
    let o=a*b;
    return o;
}
console.log(multiply(2,3));
console.log(multiply(4,5));
// Task4
let makeCar={
        make:"Toyota",
        model:"Camry", 
        year:2020,
        getCarInfo:()=>{
            
            console.log(makeCar.make + " " + makeCar.model + " " + makeCar.year) 
            
        }
}
console.log(makeCar.make);
makeCar.getCarInfo()
// Task5
let colors = ["red","green","yellow"]
function printMe(array) {
    array.forEach(element => {
        console.log(element);
    });
}
printMe(colors);
// Task6
function getStringLength(str) {return str.length;}
let name=("Hello")
let name2=("'JavaScript'")
let lengthing=getStringLength(name)
let lengthing2=getStringLength(name2)
console.log(lengthing,lengthing2);

//Task7
function caser(cookie) {return cookie.toUpperCase();}
let name3=("Hello")
let name4=("'JavaScript'")
let upper=caser(name3)
let upper2=caser(name4)
console.log(upper,upper2);

// Task8
function splity(splito,delimiter) {
    return splito.split(delimiter)
}
let gg = "Hello,my,world";
let delimiter =",";
let resultArray= splity(gg,delimiter);
console.log(resultArray);

  