"use strict"
let starBox = document.querySelectorAll(".stars_item span");
let reat_num = document.querySelector(".reat_nums");



starBox.forEach(stars => {
    stars.onclick = function () {
        let val = this.getAttribute("data-id");
        reat_num.value=val;

        removeActive();
        reating(val);

    }
})


starBox.forEach(stars => {
    stars.addEventListener("mouseenter",function(){
        let val = this.getAttribute("data-id");
        removeActive();
        reating(val);
    })
})

function reating(input) {
    for (let i = 0; i <= input - 1; i++) {
        starBox[i].classList.add("active");
    }
}
function removeActive() {
    for (let i = 0; i < starBox.length; i++) {
        starBox[i].classList.remove("active");
    }
}
