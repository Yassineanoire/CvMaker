var cards=[{
    id:1,
    title:"my first project",
    img:"./images/DSCF0015.JPG"

},{
    id:2,
    title:"lproje tane",
    img:"./images/one-piece-wallpapers-hd.jpg",

},{
    id:3,
    title:"lproj talt",
    img:"./images/R.jpg",
}
];
var imge= document.getElementsByClassName("prg");
var titleE=document.getElementsByClassName("title");
var nextbtn=document.getElementById('two');
var prevbtn=document.getElementById('one');
let currentitem=0;

window.addEventListener("DOMContentLoaded",function () 
{
showperson();
})
function showperson(){
const item=cards[currentitem];
imge.src=item.img;
titleE=item.title;
}
nextbtn.addEventListener("click",function (){
currentitem++;
if(currentitem > cards.length-1){
    currentitem=0;
}
showperson();
});
prevbtn.addEventListener("click",function(){
    currentitem--;
    if(currentitem <0){
      
        currentitem=cards.length -1;
    }
    showperson();
    });


