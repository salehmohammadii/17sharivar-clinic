<main>
    <!--************* sliderBox code start *************-->
    <?php /** @var array $parametrs */
    foreach ($parametrs['slider'] as $slider_item) {
        if ($slider_item['place'] == 1) { ?>
            <section class="sliderBox ">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider2">
                                <?php foreach ($parametrs['slide'] as $slide_item) {
                                    if ($slide_item['for_slider'] == 1) { ?>
                                        <div class="slide2">
                                            <?php if ($slide_item['title'] != "empty") { ?>
                                                <h2> <?= $slide_item['title']; ?></h2>
                                            <?php } ?>
                                            <?php if ($slide_item['link'] != "empty") { ?>
                                                <a class="learn_more1" target="_blank" href="<?= $slide_item['link']; ?>">بیشتر بدانید <i class="fas fa-angle-left"></i></a>
                                            <?php } ?>
                                            <img src="<?= assets( $slide_item['file']) ?>" alt="sliderBox img">
                                        </div>
                                    <?php }
                                }
                                ?>
                                <button class="slider__btn slider__btn--left">&#10095;</button>
                                <button class="slider__btn slider__btn--right">&#10094;</button>
                                <div class="dots2"></div>
                                <div class="slide_searchBox3">
                                    <form method="post" action="<?= url('search') ?>" class="slide_searchFrm" autocomplete="off">
                                        <label for="#">نام پزشک و یا تخصص مورد نظر خود را بیابید</label>
                                        <input type="text" name="search" id="search" placeholder="جستجو">
                                        <button type="submit"  class="search_btn search_btn3  df"><img width="20" src="<?=assets('public/app/img/search.png')?>" alt="search"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }
    }  ?>
    <?php foreach ($parametrs['slider'] as $slider_item) {
        if ($slider_item['place'] == 2) { ?>
            <section class="sliderBox">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider2">
                                <?php foreach ($parametrs['slide'] as $slide_item) {
                                    if ($slide_item['for_slider'] == 2) { ?>
                                        <div class="slide2">
                                            <?php if ($slide_item['title'] != "empty") { ?>
                                                <h2> <?= $slide_item['title']; ?></h2>
                                            <?php } ?>
                                            <img src="<?= assets( $slide_item['file']); ?>" alt="sliderBox img">
                                        </div>
                                    <?php }
                                }
                                ?>
                                <button class="slider__btn slider__btn--left">&#10095;</button>
                                <button class="slider__btn slider__btn--right">&#10094;</button>
                                <div class="dots2"></div>
                                <div class="slide_searchBox3">
                                    <form method="post" action="<?= url('search') ?>" class="slide_searchFrm" autocomplete="off">
                                        <label for="#">نام پزشک و یا تخصص مورد نظر خود را بیابید</label>
                                        <input type="text" name="search" id="search" placeholder="جستجو">
                                        <button type="submit"  class="search_btn search_btn3  df"><img width="20" src="<?= assets('public/app/img/search.png')?> ?>" alt="search"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }
    }  ?>
    <?php foreach ($parametrs['slider'] as $slider_item) {
        if ($slider_item['place'] == 3) { ?>
            <section class="sliderBox">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider2">
                                <?php foreach ($parametrs['slide'] as $slide_item) {
                                    if ($slide_item['for_slider'] == 3) { ?>
                                        <div class="slide2">
                                            <img src="<?=assets('public/app/img/'. $slide_item['file']); ?>" alt="sliderBox img">
                                        </div>
                                    <?php }
                                }
                                ?>
                                <button class="slider__btn slider__btn--left">&#10095;</button>
                                <button class="slider__btn slider__btn--right">&#10094;</button>
                                <div class="dots2"></div>
                                <div class="slide_searchBox3">
                                    <form method="post" action="<?= url('search') ?>" class="slide_searchFrm" autocomplete="off">
                                        <label for="#">نام پزشک و یا تخصص مورد نظر خود را بیابید</label>
                                        <input type="text" name="search" id="search" placeholder="جستجو">
                                        <button type="submit"  class="search_btn search_btn3  df"><img width="20" src="<?= assets('public/app/img/search.png')?> ?>" alt="search"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }
    }  ?>
    <?php foreach ($parametrs['slider'] as $slider_item) {
        if ($slider_item['place'] == 4) { ?>
            <section class="sliderBox">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel" dir="ltr">
                                <?php foreach ($parametrs['slide'] as $slide_item) {
                                    if ($slide_item['for_slider'] == 4) { ?>
                                        <div class="product_slides">
                                            <img src="<?=assets('public/app/img'. $slide_item['file']); ?>" alt="sliderBox img">
                                        </div>
                                    <?php }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }
    }  ?>
    <!--************* sliderBox code end *************-->
    <section class="info_body">
        <!--************* infoBox1 code start *************-->
        <section class="infoBox1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6  animate__animated  animate__backInRight">
                        <div class="cardBox1 df m-0-mobile">
                            <div class="card df" onclick="window.location.href= 'contact-us'; ">
                                <div class="card_img df">
                                    <img src="<?= assets('public/app/img/phone-2.png') ?>" alt="icon">
                                </div>
                                <h3>تماس با مرکز</h3>
                            </div>
                            <div class="card df" onclick="window.location.href= 'calender'; ">
                                <div class="card_img df">
                                    <img src="<?= assets('public/app/img/2-2.png') ?>" alt="icon">
                                </div>
                                <h3>تقویم پزشکان</h3>
                            </div>
                            <div class="card df " onclick="window.location.href= 'lab-result'; ">
                                <div class="card_img df">
                                    <img src="<?= assets('public/app/img/1-2.png')?>" alt="icon">
                                </div>
                                <h3>جواب آزمایش</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6  animate__animated  animate__backInLeft">
                        <div class="clock_info df">
                            <span>هفت روز هفته - شبانه روزی</span>
                            <span>021-33365011-13</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************* infoBox1 code end *************-->
        <!--************* about-us code start *************-->
        <section class="info_box2">
            <div class="container About_Us">
                <div class="row">
                    <div data-wow-duration="1s" class="col-12 col-md-12 col-lg-6 order1 wow animate__animated  animate__backInRight">
                        <div class="about_usBox">
                            <h4>درباره ما</h4>
                            <p>
                                <?= mb_strimwidth($parametrs['settings']['about_summary'], 0, 444); ?>
                            </p>
                            <a href="<?= url('about-us') ?>" class=" learn_more1 learn_more2 ">بیشتر بدانید<i class="fas fa-angle-left"></i></a>
                        </div>
                    </div>
                    <div data-wow-duration="1s" class="col-12 col-md-12 col-lg-6 order wow animate__animated  animate__backInLeft">
                        <div class="about_us_img df">
                            <img style="object-fit: scale-down" src="<?= assets($parametrs['settings']['about_poster'])?>" alt="about-us img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************* about-us code end *************-->
    </section>
    <!--************* Paraclinic code start *************-->
    <section>
        <div class="container Paraclinic">
            <div class="row">
                <div class="col-12">
                    <h4 class="Paraclinic_title">پاراکلینیکــ</h4>
                    <div class="Paraclinic_items df">
                        <?php  if (count( $parametrs['all_para']) >= 1) {
                            foreach ( $parametrs['all_para'] as $para_clinic_List) { ?>
                                <div class="Paraclinic_item wow animate__animated  animate__fadeInDown ">
                                    <img src="<?=assets( $para_clinic_List['poster']) ?>" width="75" alt="Paraclinic_item photo">
                                    <h4><?= $para_clinic_List['title'] ?></h4>
                                    <p> <?= substr($para_clinic_List['content'], 0, 120)  ?> </p>
                                    <a href="<?= url('paraclinic/'.clinik_urlencode( $para_clinic_List['url']))  ?>" class="learn_more1 learn_more3"> بیشتر بدانید <i class="fas fa-angle-left"></i></a>
                                </div>
                            <?php }
                        } else { ?>
                            <span class="page_msg">هیچ موردی در سایت ثبت نشده است</span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************* Paraclinic code end *************-->
    <!--************* darokhane code start *************-->
    <section data-wow-duration="1s" class="wow animate__animated  animate__fadeInUp">
        <div class="container darokhane">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="darokhane_Body df">
                        <div class="DB_1">
                            <img width="100" src="<?= assets('public/app/img/darokhane_icon.png') ?>" class="darokhane_icon1" alt="darokhane_icon">
                            <h5>داروخانــــــه</h5>
                        </div>
                        <a href="<?= url('drug-store') ?>" class="learn_more1 payBtn">بیشتر بدانید<i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="darokhane_Body darokhane_Body1 df darokhane_p">
                        <p class="darokhane_p">
                            <?= $parametrs['settings']['drugstore_summary']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************* darokhane code end *************-->
    <!--************* darokhane code start *************-->
    <section data-wow-duration="1s" class="wow animate__animated  animate__fadeInUp">
        <div class="container darokhane2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="darokhane_Body df">
                        <div class="DB_1 DB_2">
                            <img width="100" src="<?= assets('public/app/img/donate.png')?>" class="darokhane_icon2" alt="darokhane_icon">
                            <h5>صندوق خیــریه درمانی</h5>
                        </div>
                        <a href="<?= url('charity') ?>" class="learn_more1 payBtn">پرداخت آنلاین<i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="darokhane_Body darokhane_Body1 df darokhane_p darokhane_p2">
                        <p class="darokhane_p darokhane_p2"><?= $parametrs['settings']['charity_summary'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************* darokhane code end *************-->
    <!--************* blog code start *************-->
    <section data-wow-duration="1s" class="wow animate__animated  animate__fadeIn blog_box">
        <div class="container blog">
            <div class="row">
                <div class="col-12">
                    <h5 class="blog_title1">بلاگــ</h5>
                </div>
                <?php  if (count($parametrs['articles']) >= 1) { ?>
                <?php foreach ($parametrs['articles'] as $article) { ?>
                <div class="col-12 col-md-12 col-lg-4" >
                    <div class="blog_body">
                        <a href="<?= url('blog/'.clinik_urlencode($article['url'])) ; ?>">   <img class="blog_img" src="<?= assets( $article['poster']); ?>" alt="blog_photo"></a>
                        <div class="Blog_contentBox">
                            <a href="<?= url('blog/'.clinik_urlencode($article['url'])) ; ?>"><?= $article['title']; ?></a>
                            <div class="sub_infoBog">
                                <div class="sub_infoBlog_p1">
                                    <span>مقاله<img width="23" src="<?=assets('public/app/img/blog_vector.png')?>" alt="blog_vector"></span>

                                </div>
                                <div class="sub_infoBlog_p2">
                                    <span> <?= $article['writer']; ?> <img width="33" src="<?= assets('public/app/img/user_vector.png')?>" alt="blog_vector"></span>

                                </div>
                            </div>
                        </div>

                    </div>
                    <a class=" learn_more1 learn_more_blog" href="<?= url('blog/'.clinik_urlencode($article['url'])) ; ?>">بیشتر بخوانید<i class=" fas fa-angle-left"></i> </a>

                </div>
                <?php } ?>
            </div>
            <div class="show_mores ">
                <a href="<?= url('blog') ?>" class="m-0 learn_more1 learn_more5"> مشاهده بیشتر <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path></svg><!-- <i class=" fas fa-chevron-down"></i> Font Awesome fontawesome.com --> </a>
            </div>
           

            <?php } else { ?>
            <span class="page_msg">هیچ مقاله‌ای در سایت ثبت نشده است</span>
        </div>
        <?php } ?>

        </div>
    </section>
    <!--************* blog code end *************-->
    <div className="scroll-to-top">
            <span class="btn"><i class="fas fa-chevron-up"></i></i>
    </div>
</main>