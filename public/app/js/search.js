let skill_type = document.querySelector(".skills");
let Advace_btn = document.querySelector(".Advace_btn");
let week_name = document.querySelector(".week_name");
let doctor_name = document.querySelector(".doc_name");
let skillBox = document.querySelectorAll(".skills_boxs");
let week_item = document.querySelectorAll(".week_item");
let doctorBox = document.querySelectorAll(".doctorBox");
skill_type.addEventListener("change", function () {
    let this_val = this.value;
    skillBox.forEach(box => {
        box.classList.add("d-none");
        if (box.getAttribute("data-type") == this_val) {
            box.classList.remove("d-none");
        }
    })
});


week_name.addEventListener("change", function () {
    let this_val = this.value;
    week_item.forEach(items => {
        items.classList.add("d-none");
        items.classList.remove("df");
        if (items.getAttribute("data-val") == this_val) {
            items.classList.remove("d-none");
            items.classList.add("df");
        }
    })
});

doctor_name.addEventListener("change", function () {
    let this_val = this.value;
    doctorBox.forEach(doc => {
        doc.classList.add("d-none");
        doc.classList.remove("df");
        if (doc.getAttribute("doc-val") == this_val) {
            doc.classList.remove("d-none");
            doc.classList.add("df");
        }
    })
});

Advace_btn.onclick=function(){
    setTimeout(function(){
        window.location.reload();
    },100);
}


