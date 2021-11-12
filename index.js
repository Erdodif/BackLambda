let t = [0,1,2,233,10,3,9,7,4,1000,-7,66,-5,-8];
t.sort((a,b)=>{
    return a-b;
});
console.log(t);
let duplo = t.map(elem => elem*2);
console.log(duplo);
let szurt = t.filter(elem => elem%2===0);
console.log(szurt);
window.addEventListener("DOMContentLoaded",()=>{
    document.querySelectorAll("button")[0].addEventListener("click",()=>{
        alert("f u");
    })
});