"use strict"
let Contact_inputs = document.querySelectorAll(".C_input");
let Contact_btn = document.querySelector(".coment_btn");
let num1 = document.querySelector(".num1");
let num2 = document.querySelector(".num2");
let actions = document.querySelector(".action");
let capcha_input = document.querySelector(".capcha_input");
let action_items = Array("+", "+");
let R_num1 = Math.floor(Math.random() * 10);
let R_num2 = Math.floor(Math.random() * 10);
let A_num = Math.floor(Math.random() * 2);




num1.innerHTML = R_num1;
num2.innerHTML = R_num2;
actions.innerHTML = action_items[A_num];
let comput = eval(R_num1 + action_items[A_num] + R_num2);

Contact_btn.onclick = function (e) {

    
    Contact_inputs.forEach(inputs => {
        if (inputs.value.length==0 )  {
            e.preventDefault();
            inputs.style.border = "1px solid #c00";
        }



    })
    if (capcha_input.value != comput) {
        e.preventDefault();
        capcha_input.style.backgroundColor = "#c000003a";

    } else {
        capcha_input.style.backgroundColor = "#00c0003a";

    }



}