


let cat_itemsBox=document.querySelectorAll(".cat_itemsBox");
let scroll_box=document.querySelectorAll(".scrollBox");
cat_itemsBox.forEach(box=>{
    box.addEventListener("scroll",function(){
        let innerBox=this.nextElementSibling.querySelector("span");
        let w = box.scrollTop  / (box.scrollHeight - box.clientHeight) * 100;
        let height=Math.ceil(w);
        innerBox.style.top=height+"%";
    })

})


let cat_itemsBox1=document.querySelector(".cat_itemsBox1");
let item_height=cat_itemsBox1.scrollHeight;
if( item_height>=390){

    let x=cat_itemsBox1.nextElementSibling;
    x.classList.add("active");
}else{
    let x=cat_itemsBox1.nextElementSibling;
    x.classList.remove("active");
}


let cat_itemsBox2=document.querySelector(".cat_itemsBox2");

let item_height2=cat_itemsBox2.scrollHeight;
if( item_height2>=390){

    let y=cat_itemsBox2.nextElementSibling;
    y.classList.add("active");
}else{
    let y=cat_itemsBox2.nextElementSibling;
    y.classList.remove("active");
}