let more_blogBtn = document.querySelector(".more_blogBtn");
let blog_box = document.querySelector(".blog_box");


more_blogBtn.onclick = function() {
    if(blog_box.style.height==0){
        blog_box.style.height=blog_box.scrollHeight+"px";
    }else{
        blog_box.style.height=null;
    }
}