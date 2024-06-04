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
