// Task1
const buttona= document.getElementById("but1");
buttona.addEventListener("click",function(){
    alert("Button clicked!")
})
// Task2
const parentDiv = document.getElementById('tt');
const paragraph = parentDiv.querySelector("p");
const childButton = parentDiv.querySelector("button");
childButton.addEventListener("click",function(){
    paragraph.textContent="new text"
    console.log("working");

})
// Task3
parentDiv.addEventListener("dblclick", function (){
        parentDiv.style.backgroundColor = "aqua";
        console.log("dbl is working");
    }
);
// Task4
parentDiv.addEventListener("mouseenter",function(){
    paragraph.textContent="the mouse is here !!! RUN!"
    console.log("mouseenter is working");

})
// Task5
parentDiv.addEventListener("mouseleave",function(){
    paragraph.textContent="the mouse has left pheww!"
    console.log("mouseleave is working");

})
// Task6
let loginForm = document.getElementById("loginForm");
loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    let username = document.getElementById("username");
    let password = document.getElementById("password");
    if ( username.value== "" || password.value== "" )
        alert("please fill both fields!");
    else {
        alert("Login in is successful");
        console.log(`This form has a username of ${username.value} and password of ${password.value}`);
        username.value = "";
        password.value = "";
    }
})
// Task7
document.getElementById("clickToFocue").addEventListener("click",(e) =>{
    document.getElementById("fouceOnMe").focus();
});
// Task8
document.getElementById("clickToRemoveFocue").addEventListener("click",(e) =>{
    document.getElementById("fouceOnMe").blur();
});
// Task9
let keyTrucker = document.getElementById("keyTrucker");
let logTheKey = document.getElementById("logTheKey");

keyTrucker.addEventListener("keydown",(e) =>{
    let pressedKey = e.key;
    logTheKey.textContent = `Pressed Key: ${pressedKey}`;
});
// Task10
let toggleMe = document.getElementById("toggleMe");
toggleMe.addEventListener('click',()=>{
    toggleMe.classList.toggle('active');
})
// Task11
let newForm=document.getElementById('newForm');
newForm.addEventListener('submit',(e)=> {
    e.preventDefault();
    let username = document.getElementById('username');
    let useremail = document.getElementById('useremail');
    if (username.value=="" || useremail.value=="") 
        alert('please fill both fileds')

    else{
        alert('thank you!')
        console.log(`Information: ${username.value} and password of ${password.value}`);

        username.value = "";
        password.value = "";
    }

})
// Task12
let imageParent = document.getElementById('imageParent');
imageParent.addEventListener('click', (e) =>{
    e.preventDefault();
    let x = document.getElementById('imgFirst');
    let y = document.getElementById('imgSec');
    x.style.display = "none";
    y.style.display = "block";

})
// Task13
document.addEventListener('DOMContentLoaded',(e)=>{
    const pass =document.getElementById('pass');
    const togglePassword =document.getElementById('togglePassword');

    togglePassword.addEventListener('change', (e)=>{
        if(e.target.checked){
            pass.type= 'text'
        }
        else {
            pass.type= 'password'
        }

    })
})
// Task14
document.getElementById('colorPick').addEventListener('change', function() {
    var selectedColor = this.value;
    document.getElementById('divColors').style.backgroundColor = selectedColor;
});
// Task15
document.addEventListener("DOMContentLoaded", function() {
    const images = [
      "https://cdn11.bigcommerce.com/s-spem6oukby/images/stencil/1280x1280/products/123/440/8S__27839__42923.1681313264.jpg",
      "https://cdn11.bigcommerce.com/s-spem6oukby/images/stencil/1280x1280/products/123/447/JC__86231__74895.1681313265.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj6OZNsw75wfOTRU8MUOaGPU6HBttA_xFQ3jA6FER_WB1pk6yLF4-WQa37ImtSmqaBeF0Wn9E2hITslXvTbgE4zroa0F9bL3U6V1Cd-YGmuWah4jGTseNmNI-d_2jtmwZCGm6jS02POGC4v/s1600/qs.png",
    ];
    let currentIndex = 0;
    const carouselImage = document.querySelector(".carousel-image img");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    function showImage(index) {
      if (index < 0) {
        index = images.length - 1;
      } else if (index >= images.length) {
        index = 0;
      }
      carouselImage.src = images[index];
      currentIndex = index;
    }

    prevBtn.addEventListener("click", function() {
      showImage(currentIndex - 1);
    });

    nextBtn.addEventListener("click", function() {
      showImage(currentIndex + 1);
    });

    showImage(currentIndex);
  });
// Task16
const dlc = document.getElementById('dlc');
const loadContent = document.getElementById('loadContent');

const contentArray = [
    "hi",
    "how are ya ?",
    "it's a lovely day isnt ?",
    "orange is a fruite"
  ];

  loadContent.addEventListener('click',(e)=>{
   const randomIndex=Math.floor(Math.random()* contentArray.length);
   dlc.textContent = contentArray[randomIndex];
  })
// Task17



