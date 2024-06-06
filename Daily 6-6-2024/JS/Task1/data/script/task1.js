// Task1
document.getElementById("header").innerHTML="Welcome to DOM Manipulation!";

// Task2
const collection = document.getElementsByClassName("item");
collection[0].innerHTML="Class Item";

// Task3
const ep = document.getElementsByTagName("p");
for (var i=0; i<ep.length; i++)
    {
        ep[i].innerHTML= "Paragraph Elemen";
    }

// Task4
document.querySelector(".highlight").innerHTML="First Highlighted Item"

// Task5
const list = document.querySelectorAll("li");
for (var i=0; i<list.length; i++)
    {
        list[i].innerHTML="List Item"
    }

// Task6
document.querySelector('#footer').innerHTML="Footer Updated"

// Task7
const boxes = document.querySelectorAll(".box");
for (let i=0; i<boxes.length; i++)
boxes[i].innerHTML="Box Item";

// Task8
const com = document.querySelector(".container p");
com.textContent = "div";
com.style.color = "blue"; 

// Task9



