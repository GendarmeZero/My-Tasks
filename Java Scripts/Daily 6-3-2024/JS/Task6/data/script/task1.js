// Function to demonstrate the scope of let and var
function scopeTest() {
    // Using var 
    if (true) {
        var varVariable = 'I am a var variable';
        console.log(varVariable); 
    }
    console.log(varVariable);

    // Using let 
    if (true) {
        let letVariable = 'I am a let variable';
        console.log(letVariable);
    }
    console.log(letVariable); 
}
