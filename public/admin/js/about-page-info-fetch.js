let btn=document.querySelector(".read-btn");
let type="fetch";
btn.onclick=function(){
window.location.href="../pages/about.php?page="+type;
}