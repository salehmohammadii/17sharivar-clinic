
 
   
   
    <!-- ************ paraclinic_title img title code start ************* -->
    <section>
        <div class="container">
            

            <img src='<?= assets('public/app/img/Paraclinic-2.png') ?>' class='w-100' />
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
                        foreach($parametrs['fathers'] as $father){
                        ?>
                            <a href="<?= url('paraclinic/'.urlencode($father['title'])) ?>"><?= $father['title'] ?></a>
                        <?php
                        }
                        ?>
                        <a href="<?= url('health-service/'.urlencode($parametrs['health_service']['title'])) ?>"><?= $parametrs['health_service']['title'] ?></a>
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
                                <h2>
                                    <?= $parametrs['health_service']['title'] ?>
                                </h2>
                                <div class="paraBox df">
                                    <img width="150" 
                                    src="<?= assets( $parametrs['health_service']['page_poster']) ?>" alt="title_logo">
                                     <?= $parametrs['health_service']['content'] ?>
                                </div>
                            </div>
                        </div>
            </div>

        </div>
    </section>

    <?php  if (count( $parametrs['childs']) >= 1) {?>
    <section>
        <div class="container Paraclinic">
            <div class="row">
                <div class="col-12">
                    <h4 class="Paraclinic_title">زیر مجموعه ها</h4>
                    <div class="Paraclinic_items df">
                       <?php
                            foreach ( $parametrs['childs'] as $para_clinic_List) { ?>
                                <div class="Paraclinic_item wow animate__animated  animate__fadeInDown ">
                                    <img src="<?=assets( $para_clinic_List['poster']) ?>" width="75" alt="Paraclinic_item photo">
                                    <h4><?= $para_clinic_List['title'] ?></h4>
                                    <p> <?= substr($para_clinic_List['content'], 0, 120)  ?> </p>
                                    <a href="<?= url('health-service/'.urlencode( $para_clinic_List['title']))  ?>" class="learn_more1 learn_more3"> بیشتر بدانید <i class="fas fa-angle-left"></i></a>
                                </div>
                            <?php }
                        }  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--************* paraclinic code end *************-->
    <div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
    </div>
