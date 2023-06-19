<link rel="stylesheet" href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">

<main>
        <!-- ************ login img title code start ************* -->
        <section>
            <div class="container darokhane2 Rating_title">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </section>
        <!-- ************ login img title code end ************* -->
        <!-- ************ linkBox   code start ************* -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="linkBox About_content_LinkBox df">
                            <a href="<?= url('') ?>">خانه</a>
                            <a href="<?= url('rate') ?>">نظرسنجی</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ************ linkBox   code end ************* -->
        <!-- ************ login img title code start ************* -->
        <section>
            <div class="container RatingBg mb">
                <div class="row">
                    <div class="col-12">
                        <div class="Rating_body">
                            <div class="RatingBox">
                                <h1>نظرسنجی</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h2 class="Rating_msg">شما می توانید ما را از هرگونه رضایتمندی، انتقاد و یا پیشنهاد خود بهره مند سازید </h2>
                        <div class="coment_Form Rating_frm">
                            <form method="post" action="<?= url('rate/store') ?>" class="Contact_Frm Rating_frmBox">
                                <div class="coment_frm1 reating_inputs">
                                    <input name="name" class="coment_info contact_input C_input" type="text" placeholder="نام و نام خانوادگی">
                                    <input name="phone" class="coment_info contact_input C_input" type="text" placeholder="تلفن همراه">
                                    <input name="doctor" class="coment_info contact_input C_input" type="text" placeholder="نام پزشک / متصدی معالج">
                                    <input name="visit_date" class="coment_info contact_input C_input" type="text" id="persianDatapicker" placeholder="تاریخ مراجعه">
                                    <div class="reatBox2">
                                        <span>میزان رضایتمندی شما از خدمات</span>
                                        <div class="stars_item">
                                            <span data-id="1"><i class=" fas fa-star"></i></span>
                                            <span data-id="2"><i class=" fas fa-star"></i></span>
                                            <span data-id="3"><i class=" fas fa-star"></i></span>
                                            <span data-id="4"><i class=" fas fa-star"></i></span>
                                            <span data-id="5"><i class=" fas fa-star"></i></span>
                                        </div>
                                        <input type="hidden" name="reate" class="reat_nums">
                                    </div>
                                    <textarea name="msg" class="content contact_textarea C_input" placeholder="توضیحات"></textarea>
                                </div>
                                <div class="btnBox reatebtnBox df">
                                    <div class="capchaBox reat_Capchabox df">
                                        <div class="code df">
                                            <span class="num1">10</span>
                                            <span class="action">+</span>
                                            <span class="num2">13</span>
                                        </div>
                                        <input class="capcha_input" type="text" placeholder="پاسخ عبارت">
                                    </div>
                                    <button class="coment_btn RatingBtn" type="submit" >ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- ************ login img title code end ************* -->
    </main>
    <script src="<?= assets('public/app/js/star-reating.js') ?>" ></script>
    <script src="<?= assets('public/app/js/reating.js') ?>" ></script>
    <script src="<?= assets('public/app/js/comments_input_validate.js') ?>" ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    if (flash('status')=='t') { ?>
        <script>
            Swal.fire(
                'اعلان',
                ' عملیات باموفقیت ثبت شد',
                'success'
            )
        </script>
    <?php }