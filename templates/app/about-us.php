
<link rel="stylesheet" href="<?= assets('public/app/css/splide.min.css')?>">

<section>
    <div class="container darokhane2 About_title">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
</section>
<!-- ************ About_title img title code end ************* -->
<!-- ************ linkBox   code start ************* -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linkBox About_content_LinkBox df">
                    <a href="<?= url('') ?>">خانه</a>
                    <a href="<?= url('about-us') ?>">درباره ما</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ************ linkBox   code end ************* -->
<!--************* About_info code start *************-->
<section class="mt-class1">
    <div class="container Paraclinic About_container">
        <div class="row">
            <div class="col-12">
                <div class="About_content df">
                    <div class="About_title_box df">
                        <img width="60" src="<?= assets('public/app/img/about-title.png') ?>" alt="">
                        <h1>درباره ما</h1>
                    </div>
                    <p class="df">
                        <?= mb_strimwidth($parametrs['content'],0,2000); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-class5">
    <div class="container Paraclinic About_bodyBox">
        <div class="row">
            <div class="col-12">
                <div class="About_content df">
                    <div class="About_title_box df">
                        <img width="60" src="<?= assets('public/app/img/saham.png') ?>" alt="">
                        <h2>پزشکان</h2>
                    </div>
                    <div  id="slider2" class="splide slider2">
                        <div class="splide__track">
                            <div class="splide__list" dir="ltr">
                                <?php foreach($parametrs['doctors'] as $saham_list_item) {?>
                                        <div class="saham_item saham_item2 df splide__slide">
                                            <img width="200" height="350" src="<?= assets( $saham_list_item['profile']); ?>" alt="avatar">
                                            <h3> <?= $saham_list_item['full_name']; ?></h3>
                                            <span><?= $saham_list_item['sk_title']; ?></span>
                                            <span><?= $saham_list_item['resume']; ?></span>
                                        </div>
                                <?php } ?>
                                <a href="#" class=" learn_more1 learn_more5" id="charity-pay"> مشاهده بیشتر <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path></svg><!-- <i class=" fas fa-chevron-down"></i> Font Awesome fontawesome.com --> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div className="scroll-to-top">
            <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>

<script src="<?= assets('public/app/js/splide.min.js') ?>"></script>
