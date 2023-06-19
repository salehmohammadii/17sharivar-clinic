let login_btn = document.querySelector(".login_btn");
let login_inputs = document.querySelectorAll(".login_input");
let loadingBox = document.querySelector(".loading");
let username = document.querySelector(".username");
let password = document.querySelector(".password");
login_btn.onclick = function (e) {
    let usernameVal = username.value;
    let passwordVal = password.value;
    login_inputs.forEach(input => {
        if (input.value == "" || input.value.length == 0) {
            e.preventDefault();
            toastr.warning("لطفا فیلد هارو به درستی واردکنید");
        }
    })
    if (usernameVal.length != 11 || passwordVal.length < 4) {
        e.preventDefault();
        toastr.warning("لطفا اطلاعات  را به درستی واردکنید");
    }
    else {
        e.preventDefault();
        sends(usernameVal, passwordVal);
    }
}
function sends(inp1, inp2) {
       
        $.ajax({
            type: "POST",
            url: "../php/sign-in.php",
            data: { user: inp1, pass: inp2 },
            success: function (response) {
                console.log(response);
                toastr.success("لطفا منتظر بمانید");
                if (response == "ok") {
                    setTimeout(function () {
                        loadingBox.classList.remove("active");
                        window.location.href = "code.php";
                    }, 1000);
                } else if (response == "login") {
                    toastr.success("درحال پردازش برای ورود به حساب");
                    setTimeout(function () {
                        window.location.href = "../";
                    }, 1000);
                } else if (response == "notActive") {
                    toastr.warning("حساب کاربری شما فعال نیست");
                    setTimeout(function () {
                        window.location.href = "code.php";
                    }, 1000);
                } else if (response == "Found") {
                    toastr.warning("اطلاعات درسیستم وجود دارد");
                }
            }
        });
    
}

let icon_toggle_pass = document.querySelectorAll('.icon_toggle_pass');

icon_toggle_pass.forEach(toggle=>{
    toggle.addEventListener('click' , e=>{
        let el_target = e.target
        let input_toogle_pass = document.querySelector(`.${el_target.dataset.input}`)
        if( input_toogle_pass.type == 'text'){
            input_toogle_pass.type ='password'
            el_target.innerHTML = '  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" id="mainIconPathAttribute"></path> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" id="mainIconPathAttribute"></path> </svg>'
        }
        else{
            input_toogle_pass.type ='text'

            el_target.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" id="mainIconPathAttribute"></path> <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" id="mainIconPathAttribute"></path> <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" id="mainIconPathAttribute"></path> </svg>';

        }
    });
});