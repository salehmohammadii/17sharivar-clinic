
<section>
    <div class="container darokhane2 Calendar_title">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
</section>
<!-- ************ Calendar img title code end ************* -->
<!-- ************ linkBox   code start ************* -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="linkBox About_content_LinkBox df">
                    <a href="../">خانه</a>
                    <a href="calendar">نتیجه جستجوی : <?= /** @var string $title */
                        $title; ?> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ************ linkBox   code end ************* -->
<!--************* Calendar code start *************-->
<section>
    <div class="container ">
        <div class="row">
            <div class="col-12">

            </div>

            <div class="col-12 skills_boxs">
                <div class="weekBoxBody df">
                    <div class="weekBoxTitle">
                        <h2> <?= $title; ?></h2>
                        <span></span>
                    </div>
                    <div class="week_items df">
                        <div data-val="Saturday" class="week_item df">
                            <h3>شنبه</h3>
                            <span class="date">1398/12/20</span>
                            <?php /** @var array $parametrs */
                            foreach ($parametrs['doctors'] as $all_users_liste) {
                                if ($all_users_liste['Saturday'] == 1){ ?>
                                    <div doc-val="<?=$all_users_liste['full_name']; ?>" class="doctorBox df">
                                        <small><?= "دکتر" . $all_users_liste['full_name']; ?></small>
                                        <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> 8:00 تا 00 : 21 </small> </span>
                                        <span class="rezerv">رزرو نوبت</span>
                                    </div>
                                <?php }}  ?>
                        </div>
                        <div data-val="Sunday" class="week_item df">
                            <h3>یک شنبه</h3>
                            <span class="date">1398/12/20</span>
                            <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                if ($all_users_liste['Sunday'] == 1  ){ ?>
                                    <div doc-val="<?=$all_users_liste['full_name']; ?>" class="doctorBox df">
                                        <small><?= "دکتر" . $all_users_liste['full_name']; ?></small>
                                        <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> 8:00 تا 00 : 21 </small> </span>
                                        <span class="rezerv">رزرو نوبت</span>
                                    </div>
                                <?php }} ?>
                        </div>
                        <div data-val="Monday" class="week_item df">
                            <h3>دوشنبه</h3>
                            <span class="date">1398/12/20</span>
                            <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                if ($all_users_liste['Monday'] == 1 ) {?>
                                    <div doc-val="<?=$all_users_liste['full_name']; ?>" class="doctorBox df">
                                        <small><?= "دکتر" . $all_users_liste['full_name']; ?></small>
                                        <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> 8:00 تا 00 : 21 </small> </span>
                                        <span class="rezerv">رزرو نوبت</span>
                                    </div>
                                <?php } }?>
                        </div>
                        <div  data-val="Tuesday" class="week_item df">
                            <h3>سه شنبه</h3>
                            <span class="date">1398/12/20</span>
                            <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                if ($all_users_liste['Tuesday'] == 1 ) { ?>
                                    <div doc-val="<?=$all_users_liste['full_name']; ?>" class="doctorBox df">
                                        <small><?= "دکتر" . $all_users_liste['full_name']; ?></small>
                                        <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> 8:00 تا 00 : 21 </small> </span>
                                        <span class="rezerv">رزرو نوبت</span>
                                    </div>
                                <?php }} ?>
                        </div>
                        <div data-val="Wednesday" class="week_item df">
                            <h3>چهار شنبه</h3>
                            <span class="date">1398/12/20</span>
                            <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                if ($all_users_liste['Wednesday'] == 1  ) {?>
                                    <div doc-val="<?=$all_users_liste['full_name']; ?>" class="doctorBox df">
                                        <small><?= "دکتر" . $all_users_liste['full_name']; ?></small>
                                        <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> 8:00 تا 00 : 21 </small> </span>
                                        <span class="rezerv">رزرو نوبت</span>
                                    </div>
                                <?php }} ?>
                        </div>
                        <div data-val="Thursday" class="week_item df">
                            <h3>پنج شنبه</h3>
                            <span class="date">1398/12/20</span>
                            <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                if ($all_users_liste['Thursday'] == 1 ){ ?>
                                    <div doc-val="<?=$all_users_liste['full_name']; ?>" class="doctorBox df">
                                        <small><?= "دکتر" . $all_users_liste['full_name']; ?></small>
                                        <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> 8:00 تا 00 : 21 </small> </span>
                                        <span class="rezerv">رزرو نوبت</span>
                                    </div>
                                <?php } }?>
                        </div>
                        <div data-val="Friday" class="week_item df">
                            <h3>جمعه</h3>
                            <span class="date">1398/12/20</span>
                            <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                if ($all_users_liste['Friday'] == 1  ){ ?>
                                    <div doc-val="<?=$all_users_liste['full_name']; ?>" class="doctorBox df">
                                        <small> <?= "دکتر" . $all_users_liste['full_name']; ?></small>
                                        <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> 8:00 تا 00 : 21 </small> </span>
                                        <span class="rezerv">رزرو نوبت</span>
                                    </div>
                                <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--************* Calendar code end *************-->
<div className="scroll-to-top">
            <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>
<script src="../script/jquery.js"></script>
<script src="../script/all.min.js"></script>
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