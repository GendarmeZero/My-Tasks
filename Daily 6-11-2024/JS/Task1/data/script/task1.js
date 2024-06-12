// Task1
const dataNum01 = [1,2,3,4,5,6,7,8,9,10]
let dataNum01New = dataNum01.map(dataNum01Res);
function dataNum01Res(ex) {
    return ex ** 2
    
}
console.log(dataNum01New);
// Task2
const dataNum02 = [1,2,5,8,5,9,,10,11,12,13,50,100,500]
let dataNum02New = dataNum02.filter(dataNum02Res);
function dataNum02Res(ex) {
    return ex >10;
    
}
console.log(dataNum02New);
// Task3
const dataNum03 = ["ali","mohammed","ala","koko","mustafa",]
dataNum03.forEach(dataNum03Res);
function dataNum03Res(names,index,array) {
    array[index] = names.toUpperCase();
    
}
console.log(dataNum03);
//Task4
const dataNum04 = [{name: "ali",age: 25},{name: "koko",age: 20},{name: "ala",age: 27}]
let dataNum04New = dataNum04.map(dataNum04Res);
function dataNum04Res(ex) {
    return ex.name;
    
}
console.log(dataNum04New);
//Task5
const dataNum05 = [{name: "ali",age: 25},{name: "koko",age: 20},{name: "ala",age: 27}]
let dataNum05New = dataNum05.filter(dataNum05Res);
function dataNum05Res(ex) {
    return ex.age >25;
    
}
console.log(dataNum05New);
//Task6
let dataNum06 = [1,2,3,4,5]
let sum =0;
dataNum06.forEach(dataNum06Res);
function dataNum06Res(element) {
    return sum += element;
    
}
console.log("The sum of all numbers:", sum);
//Task7
let dataNum07 = ["ali","koko","alyx"]
let dataNum07New = dataNum07.map(dataNum07Res);
function dataNum07Res(ex) {
    return ex.split('').reverse().join();
    
}
console.log(dataNum07New);
//Task8
let dataNum08 = [1,2,3,4,5,6,7,8,9,10]
let dataNum08New = dataNum08.filter(dataNum08Res);
function dataNum08Res(ex) {
    if (ex <=1) {
        return false;
    }for (let i = 2;i <=Math.sqrt(ex);i++)
        if (ex % i === 0) return true;
}
console.log(dataNum08New);
 //Task9
 let dataNum09 = [true, false, true, false, true];
 dataNum09.forEach(dataNum09Res);
 function dataNum09Res(element,index,array) {
    return index[array]=element
    
 }
 console.log(dataNum09);
  //Task10
  const dataNum010 = [1,2,3,4,5,6,7,8,9,10]
  let dataNum010New =dataNum010.map(dataNum010Res);
  function dataNum010Res(ex) {
    return ex.toString();
    
  }
  console.log(dataNum010New);
// Task11
const dataNum011 = [1,2,,2,3,3,4,4,5,6,7,8,9,10]
let dataNum011New =dataNum010.filter(dataNum011Res);
function dataNum011Res(element,index,array) {
    return element === index;
    
}
console.log(dataNum011New);
 /////////or by using "Set":
// const dataNum011 = [1,2,2,3,3,4,4,5,6,7,8,9,10]
// let dataNum011New = new Set(dataNum011);
// console.log(dataNum011New);
 
/// Task12
let dataNum012 = [{name: "ali",age: 25},{name: "koko",age: 20},{name: "ala",age: 27}]
dataNum012.forEach(obj=>{
    Object.keys(obj).forEach(key =>{
        console.log(`${key}:${obj[key]}`);
    })
    
})
