let sentence = "Hello world";
console.log(sentence);

document.write(sentence);
document.write("<br>This is a new line.");

let i = 2;
if(i==1){
    document.write("<button> i1 </button>");
}

function fetch(){
    let input = Number( document.getElementById("input1").value);
    console.log(input);

    input = input + 1;
    document.getElementById("p1").innerHTML= input;
}

// alert("Error!");
// confirm("Sure?");
// prompt("Give the value");

let fruits = ["Mango", "Apple", "Jackfruit"];

//Add and remove from last
fruits.push("Lichi");
fruits.pop();
console.log(fruits);

//Add and remove from beginning
fruits.unshift("Banana");
fruits.shift();
console.log(fruits);


//Remove or add specific index
fruits.splice(1,1);
console.log(fruits);
fruits.splice(1,0,"Apple");
console.log(fruits);

fruits.sort().reverse();
console.log(fruits);

console.log(sentence.toLowerCase());


console.log(sentence.toLowerCase().includes("hello"));
console.log(sentence.split(" "));


function abbreviated(name){
    let result = "";
    let words = name.split(" ");

    for(let i=0; i<words.length; i++){
        result+= words[i].charAt(0)+".";
    }
    console.log(result);
}

abbreviated("Mahmudul Hasan");

let email = "something@gmail.com";
console.log(email.replace(email.charAt(0), "*"));

