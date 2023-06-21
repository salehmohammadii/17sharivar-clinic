<!-- ************ paraclinic_title img title code start ************* -->
<section>
    <div class="container">


        <img src='<?= assets('public/app/img/Paraclinic-2.png') ?>' class='w-100'/>
    </div>
</section>
<!-- ************ paraclinic_title img title code end ************* -->
<!--************* paraclinic code start *************-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linkBox df">
                    <a href="<?= url('') ?>">خانه</a>
                    <?php
                    /** @var array $parametrs */
                    foreach ($parametrs['fathers'] as $father) {
                        ?>
                        <a href="<?= url('paraclinic/' . clinik_urlencode($father['url'])) ?>"><?= $father['title'] ?></a>
                        <?php
                    }
                    ?>
                    <a href="<?= url('paraclinic/' . clinik_urlencode($parametrs['paraclinic']['url'])) ?>"><?= $parametrs['paraclinic']['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="para">
    <div class="container no-ower-flow">
        <div class="row para_boxs">
            <div class="col-12 p_img" id="subject">
                <div class="paraclinic_box df">

                    <div class="paraBox df" style="gap: 10px">
                        <div class="row" style="justify-content: center;gap: 10px">
                            <h2><?= $parametrs['paraclinic']['title'] ?></h2>
                            <img width="150" src="<?= assets($parametrs['paraclinic']['page_poster']) ?>"
                                 alt="title_logo">
                        </div>
                            <?= $parametrs['paraclinic']['content'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php if (count($parametrs['childs']) >= 1) { ?>
<section>
    <div class="container Paraclinic">
        <div class="row">
            <div class="col-12">
                <h4 class="Paraclinic_title">زیر مجموعه ها</h4>
                <div class="Paraclinic_items df">
                    <?php
                    foreach ($parametrs['childs'] as $para_clinic_List) { ?>
                        <div class="Paraclinic_item wow animate__animated  animate__fadeInDown ">
                            <img src="<?= assets($para_clinic_List['poster']) ?>" width="75"
                                 alt="Paraclinic_item photo">
                            <h4><?= $para_clinic_List['title'] ?></h4>
                            <p> <?= substr($para_clinic_List['content'], 0, 120) ?> </p>
                            <a href="<?= url('paraclinic/' . clinik_urlencode($para_clinic_List['url'])) ?>"
                               class="learn_more1 learn_more3"> بیشتر بدانید <i class="fas fa-angle-left"></i></a>
                        </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--************* paraclinic code end *************-->
<div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>
