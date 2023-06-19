<main>
    <!-- ************ login img title code start ************* -->
    <section>
        <div class="container ">

            <img src="<?= assets('public/app/img/Lab-Result.png') ?>" alt="" class='w-100'>
        </div>
    </section>
    <!-- ************ login img title code end ************* -->
    <!-- ************ linkBox   code start ************* -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="linkBox LabResult_linkBox df">
                        <a href="../">خانه</a>
                        <a href="lab-result">نتیجه آزمایش</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ linkBox   code end ************* -->
    <!-- ************ login img title code start ************* -->
    <section>
        <div class="container darokhane2 mb">
            <div class="row">
                <div class="col-12">
                    <div class="Login_body">
                        <div class="Login_body_title df">
                            <img width="40" src="<?= assets('public/app/img/lab.png') ?>" alt="lab_vector">
                            <span>نتیجه آزمایش</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="loginForm">
                        <form method="post" action="<?= url('lab-result/view-result') ?>" class="slide_searchFrm login_Frm LabResul_tFrm">
                            <div class="login_inputBox df LabResult_input">
                                <label class="L-R-label" for="#">کد رسید آزمایشگاه</label>
                                <div class="w-100">
                                    <input type="text" name="code" id="search" class="lad_inputs" placeholder="11223344">
                                    <span class="notic">کد مندرج روی رسید آزمایشگاه را وارد کنید</span>
                                </div>
                            </div>
                            <div class="login_inputBox df LabResult_input">
                                <label class="L-R-label" for="#">شماره تلفن همراه مراجعه کننده</label>
                                <div class="w-100">
                                    <input type="phone" name="phone" id="search" class="lad_inputs" placeholder="09000000000">
                                    <span class="notic">شماره تلفن همراه خود که در رسید مندرج شده را وارد کنید</span>
                                </div>
                            </div>
                            <div class="Login_btnBox df">
                                <button class="login_btn LabBtn" type="submit" name="LabBtn">دریافت نتیجه</button>
                            </div>
                            <?php if (flash('lab_result_error')!='') { ?>
                                <span class="alert1"><?= flash('lab_result_error'); ?></span>
                            <?php } ?>
                            <?php if ( flash('lab_result_link')) { ?>
                                <a href="<?= assets( flash('lab_result_link')); ?>" class="alert1" download>دانلود فایل آزمایش</a>
                            <?php } ?>
                        </form>
                        <div class="loginBox_info LabResul_text df">
                            <span>نتایج آزمایش حدودا یک ساعت پس از زمان آماده شدن در وب سایت قرار می گیرد.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ login img title code end ************* -->
</main>
<script src="<?= assets('public/app/js/lab-result.js') ?>"></script>
