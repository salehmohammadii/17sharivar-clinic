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

<div className="scroll-to-top">
            <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>