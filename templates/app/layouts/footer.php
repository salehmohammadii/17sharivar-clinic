<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-3">
                <div class="footer_p1 df">
                    <img src="<?=   assets( $parametrs['settings']['footer']) ?>" alt="LOGO">
                    <p><?=$parametrs['settings']['about'] ?></p>
                    <div class="slide_search footer_p1_searchBox">
                        <form method="post" class="slide_searchFrm " autocomplete="off">
                            <input type="text" name="search" id="search" class="search_input" placeholder="جستجو">
                            <button type="submit" name="search_btn" class="search_btn slide_search3  df"><img width="20" src="<?=assets('public/app/img/search.png'); ?>" alt="search"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5">
                <div class="footer_p2 df">
                    <div class="span_box df">
                        <a href="<?= url('contact-us') ?>">ارتباط با ما</a>
                        <a href="<?= url('rate') ?>">نظرسنجی</a>
                        <a href="#">پاراکلینیک</a>
                    </div>
                    <div class="span_box df">
                        <a href="<?= url('about-us') ?>">درباره ما</a>
                        <a href="<?= url('blog') ?>">بلاگ</a>
                        <a href="<?= url('category/'.urlencode('اخبار')) ?>">اخبار</a>
                    </div>
                    <div class="span_box df">
                        <a href="<?= url('faq') ?>">پرسش و پاسخ</a>
                        <a href="<?= url('category/'.urlencode('آموزش')) ?>">آموزش</a>
                        <a href="<?= url('blog') ?>">مقالات</a>
                    </div>
                    <div class="span_box df">
                        <a href="<?= url('calender') ?>">تقویم پزشکان</a>
                        <a href="#">راهنما</a>
                        <a href="#">خیریه</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="footer_p3">
                    <div class="footer_p3_Box1 df">
                        <img width="20" src="<?=assets('public/app/img/location-3.png')?>" alt="location_vector">
                        <span>آدرس:</span>
                        <p><?= $parametrs['settings']['address'] ?></p>
                    </div>
                    <div class="footer_p3_Box1 df">
                        <img width="20" src="<?=assets('public/app/img/phone-2.png')?>" alt="phone_vector">
                        <span>تلفن:</span>
                        <p><?= $parametrs['settings']['phone'] ?></p>
                    </div>
                    <div class="footer_p3_Box1 df">
                        <img width="23" src="<?=assets('public/app/img/contact-2.png')?>" alt="phone_vector">
                        <span>ایمیل:</span>
                        <p><?= $parametrs['settings']['email'] ?></p>
                    </div>
                    <div class="social_Box1 df">
                        <span>ما را در شبکه های اجتماعی دنبال کنید</span>
                        <a class="df" href="<?= $parametrs['settings']['twiter'] ?>"><img width="22" src="<?=assets('public/app/img/telegram-white.png')?>" alt="twiter_logo"></a>
                        <a class="df" href="<?= $parametrs['settings']['linkdin'] ?>"><img width="19" src="<?=assets('public/app/img/l-2.png')?>" alt=""></a>
                        <a class="df" href="<?= $parametrs['settings']['instagram'] ?>"><img width="21" src="<?=assets('public/app/img/ins-2.png')?>" alt=""></a>
                        <a class="df" href="<?= $parametrs['settings']['facebook'] ?>"><img width="20" src="<?=assets('public/app/img/whatsapp-white.png')?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="copy_right">
                    <span><?=$parametrs['settings']['copy_right'] ?></span>
                    <span>طراحی و سئـو توسط Faares</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?= assets('public/app/js/menu.js') ?>"></script>
</body>
<script src="<?= assets('public/app/js/jquery.js') ?>"></script>
<script src="<?= assets('public/app/js/all.min.js') ?>"></script>
<script src="<?= assets('public/app/js/slider-pro.js') ?>"></script>
<script src="<?= assets('public/app/js/seen.js') ?>"></script>
<script src="<?= assets('public/app/js/wow.js') ?>"></script>
<script type="text/javascript" src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.js"></script>
<script type="text/javascript" src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.js"></script>
<script src="<?= assets('public/app/js/celender.js') ?>" ></script>

<script>
    new WOW().init();
</script>
<script src="<?= assets('public/app/js/multi-slider.js') ?>"></script>
<script src="<?= assets('public/app/js/owl.carousel.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });
</script>
<script>
    const scrollBtn = document.querySelector(".btn");
    const btnVisibility = () => {
        if (window.scrollY > 400) {
            scrollBtn.style.visibility = "visible";
        } else {
            scrollBtn.style.visibility = "hidden";
        }
    };
    document.addEventListener("scroll", () => {
        btnVisibility();
    });
    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>

</html>














