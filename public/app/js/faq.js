"use strict"
let read_more=document.querySelectorAll(".read_more");
read_more.forEach(btn=>{
    btn.onclick=function(e){
        let boxs=this.parentElement;
        if(boxs.style.height==""){
            boxs.classList.add("active");
            this.classList.add("di-none");
            this.nextElementSibling.classList.remove("di-none");

        }
    }
});

let less_more=document.querySelectorAll(".less_more");
less_more.forEach(btn=>{
    btn.onclick=function(e){
        let boxs=this.parentElement;
            boxs.classList.remove("active");
            this.classList.add("di-none");
            this.previousElementSibling.classList.remove("di-none");
    }
});