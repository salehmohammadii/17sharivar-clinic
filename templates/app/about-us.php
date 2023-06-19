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
                    <a href="../../../">خانه</a>
                    <a href="about-us">درباره ما</a>
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
                        <img width="60" src="../images/about-title.png" alt="">
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
<!--************* About_info code end *************-->
<!--************* saham_info code start *************-->
<section class="mt-class5">
    <div class="container Paraclinic About_bodyBox">
        <div class="row">
            <div class="col-12">
                <div class="About_content df">
                    <div class="About_title_box df">
                        <img width="60" src="../images/saham.png" alt="">
                        <h2>پزشکان</h2>
                    </div>
                    <div  id="slider2" class="splide slider2">
                        <div class="splide__track">
                            <div class="splide__list" dir="ltr">
                                <?php foreach($parametrs['doctors'] as $doctor) {
                                    ?>
                                        <div class="saham_item saham_item2 df splide__slide">
                                            <img width="200" height="350" src="<?= assets( $doctor['profile']); ?>" alt="avatar">
                                            <h3> <?= $doctor['full_name']; ?></h3>
                                            <span><?= $doctor['sk_title']; ?></span>
                                            <span><?= $doctor['resume']; ?></span>

                                        </div>
                                    <?php  }?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************* saham_info code end *************-->
<!-- ************ licenceBox   code start ************* -->
<!-- ************ licenceBox   code end ************* -->
<div className="scroll-to-top">
            <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>