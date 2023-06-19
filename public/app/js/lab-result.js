"use strict"
let lad_inputs = document.querySelectorAll(".lad_inputs");
let LabBtn = document.querySelector(".LabBtn");

LabBtn.onclick = function (e) {
    lad_inputs.forEach(inputs => {
        if (inputs.value == "") {
            e.preventDefault();
            inputs.style.border = "1px solid #c00";
            let next_element = inputs.nextElementSibling;
            next_element.innerHTML = "لطفا این فیلد را به درستی واردکنید";
            next_element.style.color = "#c00";
        }

        if (inputs.getAttribute("type") == "phone") {
          
            if (inputs.value.length != 11) {
                e.preventDefault();
                let next_element = inputs.nextElementSibling;
                next_element.innerHTML = "لطفا  شماره تلفن 11 رقمی را به درستی واردکنید";
                next_element.style.color = "#c00";
                inputs.style.border = "1px solid #c00";
            }
        }

    });
}


