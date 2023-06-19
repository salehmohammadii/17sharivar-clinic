let inputs = document.querySelectorAll(".login_input");
let btn = document.querySelector(".login_btn");
let pass1 = document.querySelector(".Pass1");
let pass2 = document.querySelector(".Pass2");
let phone_number = document.querySelector(".phone_number");
btn.onclick = function (e) {
    inputs.forEach(input => {
        if (input.value.length == 0) {
            e.preventDefault();
            toastr.warning('لطفا  فیلد هارو به درستی  رو وارد کنید');
        }
    })

    if (pass1.value != pass2.value ) {
        e.preventDefault();
        toastr.warning(' پسورد های شما باهم مطابقت ندارد ');

    }

    if (pass1.value.length < 4 ) {
        e.preventDefault();
        toastr.warning(' پسورد    باید بیشتر از 5 کاراکتر باشد ');
    }
    if(phone_number.value.length != 11){
        e.preventDefault();
            toastr.warning('لطفا  شماره تلفن 11 رقمی   خود  را وارد کنید');
    }
}
