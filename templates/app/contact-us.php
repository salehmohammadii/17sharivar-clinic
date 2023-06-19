<link rel="stylesheet" href="<?= assets('public/app/leaflet/leaflet.css') ?>"  />
<section>
    <div class="container darokhane2 Contact_title">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
</section>
<!-- ************ Calendar img title code end ************* -->
<!--************* Calendar code start *************-->
<section>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="linkBox C_linkbox df">
                    <a href="../">خانه</a>
                    <a href="contact">ارتباط با ما</a>
                </div>
            </div>
            <div id="map" class="col-12" style="height: 400px">
            </div>
        </div>
        <div class="row box1">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="footer_p3 Contact_p1">
                    <div class="footer_p3_Box1 df">
                        <img width="22" src="<?= assets('public/app/img/location-2.png') ?>" alt="location_vector">
                        <span>آدرس:</span>
                        <p><?= /** @var array $parametrs */
                            $parametrs['settings']['address'] ?></p>
                    </div>
                    <div class="footer_p3_Box1 df">
                        <img width="23" src="<?= assets('public/app/img/phone.png') ?>" alt="phone_vector">
                        <span>تلفن:</span>
                        <p><?= $parametrs['settings']['phone'] ?></p>
                    </div>
                    <div class="footer_p3_Box1 df">
                        <img width="26" src="<?= assets('public/app/img/printer.png') ?>" alt="phone_vector">
                        <span>فکس:</span>
                        <p><?= $parametrs['settings']['fax'] ?></p>
                    </div>
                    <div class="footer_p3_Box1 df">
                        <img width="25" src="<?= assets('public/app/img/contact.png') ?>" alt="phone_vector">
                        <span>ایمیل:</span>
                        <p><?= $parametrs['settings']['email'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coment_Form">
                    <form method="post" action="<?= url('contact-us/store') ?>" class="Contact_Frm" autocomplete="">
                        <h4>فرم تماس</h4>
                        <div class="coment_frm1">
                            <input name="name" class="coment_info contact_input C_input" type="text" placeholder="نام و نام خانوادگی">
                            <input name="phone" class="coment_info contact_input C_input" type="phone" placeholder="تلفن همراه">
                            <input name="email" class="coment_info contact_input " type="email" placeholder="پست الکترونیک (اختیاری)">
                            <input name="subject" class="coment_info contact_input  C_input" type="text" placeholder="موضوع">
                            <div class="select_body">
                                <select name="roll" class="coment_info contact_input contact_select C_input" type="text">
                                    <option value="" disabled selected>بخش مربوط به پیام شما...</option>
                                    <option value="normal">معمولی</option>
                                    <option value="medium">متوسط</option>
                                    <option value="emergency">اضطراری</option>
                                </select>
                                <span><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <textarea name="content" class="content contact_textarea C_input" placeholder="متن"></textarea>
                        </div>
                        <div class="btnBox df">
                            <div class="capchaBox df">
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
<!--************* Calendar code end *************-->
<div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>

<script src="<?= assets('public/app/leaflet/leaflet.js') ?>" ></script>
<script>
var map = L.map('map').setView([35.685475, 51.467322 ], 16);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([35.685475, 51.467322 ]).addTo(map)
.bindPopup('کلینیک 17 شهریور')
.openPopup();
</script>
<script src="<?= assets('public/app/js/contact.js') ?>" ></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

if (flash('contact_error')!='') { ?>
    <script>
        Swal.fire(
            'اعلان',
            flash('contact_error'),
            'error'
        )
    </script>
<?php }

if (flash('contact_success')!='') { ?>
    <script>
        Swal.fire(
            'اعلان',
            ' عملیات باموفقیت ثبت شد',
            'success'
        )
    </script>
<?php }
