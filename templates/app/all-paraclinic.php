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
                    <a href="<?= url('paraclinic') ?>">پاراکلینیک ها</a>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container Paraclinic2">
        <div class="row">
            <div class="col-12">
                <h4 class="Paraclinic_title">پاراکلینیک ها</h4>
                <div class="Paraclinic_items df">
                    <?php
                    foreach ($parametrs['all_paras'] as $para_clinic_List) { ?>
                    <div class="Paraclinic_item wow animate__animated  animate__fadeInDown ">
                        <img src="<?= assets($para_clinic_List['poster']) ?>" width="75"
                             alt="Paraclinic_item photo">
                        <h4><?= $para_clinic_List['title'] ?></h4>
                        <p> <?= substr($para_clinic_List['content'], 0, 120) ?> </p>
                        <a href="<?= url('paraclinic/' . clinik_urlencode($para_clinic_List['url'])) ?>"
                           class="learn_more1 learn_more3"> بیشتر بدانید <i class="fas fa-angle-left"></i></a>
                    </div>
                    <?php }
                     ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--************* paraclinic code end *************-->
<div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>
