<main>
    <!-- ************ login img title code start ************* -->
    <section>
        <div class="container darokhane2 darokhane3">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
    <!-- ************ login img title code end ************* -->
    <!-- ************ login img title code start ************* -->
    <section>
        <div class="container darokhane2 mb">
            <div class="row">
                <div class="col-12">
                    <div class="Login_body">
                        <div class="Login_body_title df">
                            <img width="30" src="<?= assets('public/app/img/user.png') ?>" alt="user_vector">
                            <span>ورود<small> | </small>ثبت نام</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="loginForm">
                        <form method="post" action="<?= url('auth/login/login-check') ?>" class="slide_searchFrm login_Frm " autocomplete="off">
                            <div class="login_inputBox df">
                                <label class="login_inputBox_lbl" for="username">نام کاربری</label>
                                <input class="login_input username" type="phone" name="username" id="username" placeholder="تلفن همراه و یا پست الکترونیک خود را وارد کنید">
                            </div>
                            <div class="login_inputBox df position-relative">
                                <label class="login_inputBox_lbl" for="password">رمز عبور</label>
                                <input class="login_input password iunput_login" type="password" name="password" id="password" placeholder="رمز عبور خود را وارد کنید">
                                <div class='icon_toggle_pass' data-input='iunput_login'>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" id="mainIconPathAttribute"></path> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" id="mainIconPathAttribute"></path> </svg>
                                </div>
                            </div>

                            <div class="Login_btnBox forget_pass_link df">
                                <a href="Forget-Password.php">رمز عبور خود را فراموش کرده اید؟</a>
                                <button class="login_btn" type="submit">ورود</button>
                                <span class="loading ">
                                        <small></small>
                                    </span>
                            </div>
                        </form>
                        <div class="loginBox_info user_login_notice df">

                            <span >با ورود و یا ثبت نام، شما <a href="<?= url('terms') ?>">شرایط و قوانین</a> استفاده از سرویس های این سایت و <a href="<?= url('privacy-policy') ?>">قوانین حریم خصوصی</a> آن را می‌پذیرید.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ login img title code end ************* -->
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if (flash('login_error')!='') { ?>
    <script>
        Swal.fire(
            'اعلان',
            'اطلاعات وارد شده صحیح نیست.',
            'error'
        )
    </script>
<?php }
