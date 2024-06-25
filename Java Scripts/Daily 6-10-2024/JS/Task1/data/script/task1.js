window.localStorage.setItem('task1','red');
let x =window.localStorage.getItem("task1")
document.body.style.background = x;
// Task2
window.localStorage.setItem('task2',5);
let value = window.localStorage.getItem('task2');
console.log(value);
// Task3
window.localStorage.setItem('task3',true);
let y = window.localStorage.getItem('task3');
console.log(y);
// Task4
window.localStorage.setItem('task4',55);
let z = window.localStorage.removeItem('task4');
console.log(z);
// Task5
window.localStorage.setItem('task5',55);
let g = window.localStorage.getItem('task5');
console.log(g);
window.localStorage.clear();
// Task6
window.localStorage.setItem('task6',58);
let t = window.localStorage.getItem('taskt6');
if (t !== null){
    console.log("dose exists" );
} else {
    console.log("dose not exists" );

}
// Task7
let numbers = [1, 2, 3];
localStorage.setItem('numbersArray', JSON.stringify(numbers));
let retrievedNumbers = localStorage.getItem('numbersArray');
let numbersArray = JSON.parse(retrievedNumbers);
console.log(numbersArray);
// Task8
let ob = ["ali", "koko", "koko2"];
localStorage.setItem('numbersOb', JSON.stringify(ob));
let retrievedOb = localStorage.getItem('numbersOb');
let numbersOb = JSON.parse(retrievedOb);
console.log(numbersOb);
// Task9
let items = {
    task1: 'black',
    task2: 'white',
    task3: 'orange',
    numbers: [1, 2, 3, 4, 5]
};
for (let key in items) {
    localStorage.setItem(key, JSON.stringify(items[key]));
}
let retrievedItems = {};
for (let key in items) {
    retrievedItems[key] = JSON.parse(localStorage.getItem(key));
}
console.log(retrievedItems);
// Task10
localStorage.setItem('kl', 200);
localStorage.setItem('kl', 300);

let punk = localStorage.getItem('kl');
console.log(punk); 