
    <!-- ************ Calendar img title code start ************* -->
    <section>
        <div class="container ">
            <img src="<?= assets('public/app/img/FAQ.png') ?>" alt="" class='w-100'>
        </div>
    </section>
    <!-- ************ Calendar img title code end ************* -->
    <!-- ************ linkBox   code start ************* -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="linkBox About_content_LinkBox FAQ_linkBox df">
                        <a href="../">خانه</a>
                        <a href="faq">پرسش و پاسخ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ linkBox   code end ************* -->
    <!--************* FAQ code start *************-->
    <section class="Faq_body">
        <div class="container ">
            <div class="row">
                <?php /** @var array $parametrs */
                if (count($parametrs['faq_types']) >= 1) {
                    foreach ($parametrs['faq_types'] as $FAQ_item) { ?>
                        <div class="col-12 padding">
                            <div class="weekBoxTitle">
                                <h2><?= $FAQ_item['title']; ?></h2>
                            </div>
                            <?php foreach ($parametrs['faqs'] as $all_FAQ_list) {
                                if ($all_FAQ_list['types'] == $FAQ_item['id']) { ?>
                                    <div class="box_question">
                                        <div class="helpBox ">
                                            <h2 class="h2"><?= $all_FAQ_list['title'] ?></h2>
                                            <span class="FAQ_icon"><i class="fas fa-angle-right"></i></span>
                                            <p><?= $all_FAQ_list['content'] ?></p>
                                            <span class="read_more">بیشتر بخوانید</span>
                                            <span class="less_more di-none">کمتر بخوانید</span>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    <?php
                    }
                } else { ?>
                    <span class="page_msg">سوالی در سیستم ثبت نشده است!</span>
                <?php } ?>
            </div>
            <div class="row">
                <?php if (!isset($_GET['all'])) { ?>
                    <div class="col-12">
                        <a class=" learn_more1 learn_more5 faq_learn_more" href="../site/faq?all=true"> مشاهده بیشتر <i class=" fas fa-chevron-down"></i> </a>
                    </div>
                <?php } else { ?>
                    <div class="col-12">
                        <a class=" learn_more1 learn_more5 faq_learn_more" href="../site/faq"> مشاهده کمتر <i class=" fas fa-chevron-down"></i> </a>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </section>
    <section class="Faq_body">
        <div class="container ">
            <div class="row">
                        <div class="col-12 padding">
                            <div class="weekBoxTitle">
                                <h2>سوالات کاربران</h2>
                            </div>
                            <?php foreach ($parametrs['user_faq'] as $user_FAQ_list) { ?>
                                    <div class="box_question">
                                        <div class="helpBox ">
                                            <h2 class="h2"><?= $user_FAQ_list['content'] ?></h2>
                                            <span class="FAQ_icon"><i class="fas fa-angle-right"></i></span>
                                            <p><?= $user_FAQ_list['replay'] ?></p>
                                            <span class="read_more">بیشتر بخوانید</span>
                                            <span class="less_more di-none">کمتر بخوانید</span>
                                        </div>
                                    </div>
                            <?php } ?>
                        </div>
                  
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="FAQ_form_help">مراجعه کننده گرامی، در صورتیکه پاسخ سوالات خود را نیافتید، با استفاده از فرم زیر <br> سوال خود را مطرح و ارسال بفرمایید، کارشناسان ما در اولین فرصت به شما پاسخ خواهند داد.</p>
                    <div class="coment_Form FAQ_FrmBody">
                        <form method="post" action="<?= url('faq/store') ?>" class="Contact_Frm FAQ_Frm" autocomplete="">
                            <div class="coment_frm1">
                                <input name="name" class="coment_info coment_info2 contact_input C_input" type="text" placeholder="نام و نام خانوادگی">
                                <input name="phone" class="coment_info coment_info2 contact_input C_input" type="text" placeholder="شماره موبایل">
                                <input name="email" class="coment_info coment_info2 contact_input" type="email" placeholder="پست الکترونیک(اختیاری)">
                                <div class="select_body select_body2">
                                    <select name="subject" class="coment_info coment_info2 contact_input  C_input" type="text">
                                        <option value="" disabled selected>بخش مربوط به پیام شما...</option>
                                        <option value="normal">معمولی</option>
                                        <option value="medium">متوسط</option>
                                        <option value="emergency">اضطراری</option>
                                    </select>
                                    <span><i class="fas fa-chevron-down"></i></span>
                                </div>
                                <textarea name="content" class="content contact_textarea C_input FAQ_textarea" placeholder="طرح سوال"></textarea>
                            </div>
                            <div class="btnBox df">
                                <div class="capchaBox faq_capchaBox df">
                                    <div class="code df">
                                        <span class="num1">10</span>
                                        <span class="action">+</span>
                                        <span class="num2">13</span>
                                    </div>
                                    <input class="capcha_input"  type="text" placeholder="پاسخ عبارت">
                                </div>
                                <button  class="coment_btn" type="submit">ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************* FAQ code end *************-->
    <div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= assets('public/app/js/comments_input_validate.js') ?>"></script>

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