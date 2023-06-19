let open_menu=document.querySelector(".menu_btn");
let close_menu=document.querySelector(".menu_close");
let menu=document.querySelector(".m_navbar");
open_menu.onclick=function(){
    menu.classList.add("show");
}

close_menu.onclick=function(){
    menu.classList.remove("show");
}