let items=document.querySelectorAll(".helpBox");


items.forEach(item=>{
    item.onclick=function(){
       
        for (let i = 0; i < items.length; i++) {
            items[i].classList.remove("active"); 
        }
        this.classList.add("active");
    }
})
