let text="Rozaan";

let i=0;

function ketik(){

if(i<text.length){

document.getElementById("typing").innerHTML+=text.charAt(i);

i++;

setTimeout(ketik,150);

}

}

ketik();
