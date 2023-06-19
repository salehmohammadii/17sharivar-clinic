<section>
    <div class="container ">
        <img src="../images/Calendar.png" alt="" class='w-100'>
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
                    <a href="calendar">تقویم پزشکان</a>
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
                <div class="Advance_searchBody">
                    <h1>جستجوی پیشرفته</h1>
                    <form method="post" class="Advance_searchFrm df">
                        <div class="select_box_Body">
                            <select name="job" class="job skills">
                                <option value="0" disabled selected>بر اساس تخصص</option>
                                <?php /** @var array $parametrs */
                                foreach ($parametrs['skills'] as $skills_Li) { ?>
                                    <option value="<?= $skills_Li['id']; ?>"><?= $skills_Li['title']; ?></option>
                                <?php } ?>
                            </select>
                            <span class="select_box_icon"> <i class=" fas fa-chevron-left f2"></i></span>
                        </div>
                        <div class="select_box_Body">
                            <select name="week" class="job week_name">
                                <option value="0" disabled selected>بر اساس روز هفته</option>
                                <option value="Saturday">شنبه</option>
                                <option value="Sunday">یک شنبه</option>
                                <option value="Monday">دو شنبه</option>
                                <option value="Tuesday">سه شنبه</option>
                                <option value="Wednesday">چهار شنبه</option>
                                <option value="Thursday">پنج شنبه</option>
                                <option value="Friday">جمعه</option>
                            </select>
                            <span class="select_box_icon"> <i class=" fas fa-chevron-left f2"></i></span>
                        </div>
                        <div class="select_box_Body">
                            <select name="doctor_name" class="job doc_name">
                                <option value="0" disabled selected>بر اساس نام پزشک </option>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) { ?>
                                    <option value="<?= $all_users_liste['full_name']; ?>"><?= "دکتر " . $all_users_liste['full_name']; ?></option>
                                <?php } ?>
                            </select>
                            <span class="select_box_icon"> <i class=" fas fa-chevron-left f2"></i></span>
                        </div>
                        <button class="Advace_btn" type="reset">حذف فیلتر</button>
                    </form>
                </div>
            </div>
            <?php foreach ($parametrs['skills'] as $skills_Li) { ?>
                <div class="col-12 skills_boxs" data-type="<?= $skills_Li['title']; ?>">
                    <div class="weekBoxBody df">
                        <div class="weekBoxTitle">
                            <h2> <?= $skills_Li['title']; ?></h2>
                            <span></span>
                        </div>
                        <div class="week_items df">
                            <div data-val="Saturday" class="week_item df">
                                <h3>شنبه</h3>
                                <span class="date"><?php echo toShamsi($parametrs['days']['sat'],'date'); ?></span>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                    if ($all_users_liste['Saturday'] == 1 && $all_users_liste['sk_title'] == $skills_Li['title']) { ?>
                                        <div doc-val="<?= $all_users_liste['full_name']; ?>" class="doctorBox df">
                                            <small><?= "دکتر " . $all_users_liste['full_name']; ?></small>
                                            <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> <?php  if($all_users_liste['Saturday_clock'] != "") {echo $all_users_liste['Saturday_clock'] ;}else{ echo "نا مشخص"; } ; ?> </small> </span>
                                            <span class="rezerv">رزرو نوبت</span>
                                        </div>
                                    <?php }
                                }  ?>
                            </div>
                            <div data-val="Sunday" class="week_item df">
                                <h3>یک شنبه</h3>
                                <span class="date"><?php echo toShamsi($parametrs['days']['sun'],'date'); ?></span>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                    if ($all_users_liste['Sunday'] == 1 && $all_users_liste['sk_title'] == $skills_Li['title']) { ?>
                                        <div doc-val="<?= $all_users_liste['full_name']; ?>" class="doctorBox df">
                                            <small><?= "دکتر " . $all_users_liste['full_name']; ?></small>
                                            <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> <?php  if($all_users_liste['Sunday_clock'] != "") {echo $all_users_liste['Sunday_clock'] ;}else{ echo "نا مشخص"; } ; ?> </small> </span>
                                            <span class="rezerv">رزرو نوبت</span>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <div data-val="Monday" class="week_item df">
                                <h3>دوشنبه</h3>
                                <span class="date"><?php echo toShamsi($parametrs['days']['mon'],'date'); ?></span>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                    if ($all_users_liste['Monday'] == 1 && $all_users_liste['sk_title'] == $skills_Li['title']) { ?>
                                        <div doc-val="<?= $all_users_liste['full_name']; ?>" class="doctorBox df">
                                            <small><?= "دکتر " . $all_users_liste['full_name']; ?></small>
                                            <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> <?php  if($all_users_liste['Monday_clock'] != "") {echo $all_users_liste['Monday_clock'] ;}else{ echo "نا مشخص"; } ; ?> </small> </span>
                                            <span class="rezerv">رزرو نوبت</span>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <div data-val="Tuesday" class="week_item df">
                                <h3>سه شنبه</h3>
                                <span class="date"><?php echo toShamsi($parametrs['days']['tue'],'date'); ?></span>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                    if ($all_users_liste['Tuesday'] == 1 && $all_users_liste['sk_title'] == $skills_Li['title']) { ?>
                                        <div doc-val="<?= $all_users_liste['full_name']; ?>" class="doctorBox df">
                                            <small><?= "دکتر " . $all_users_liste['full_name']; ?></small>
                                            <span class=" time df"> <i class="far fa-clock"></i> <small dir=""><?php  if($all_users_liste['Tuesday_clock'] != "") {echo $all_users_liste['Tuesday_clock'] ;}else{ echo "نا مشخص"; } ; ?> </small> </span>
                                            <span class="rezerv">رزرو نوبت</span>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <div data-val="Wednesday" class="week_item df">
                                <h3>چهار شنبه</h3>
                                <span class="date"><?php echo toShamsi($parametrs['days']['wen'],'date'); ?></span>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                    if ($all_users_liste['Wednesday'] == 1 && $all_users_liste['sk_title'] == $skills_Li['title']) { ?>
                                        <div doc-val="<?= $all_users_liste['full_name']; ?>" class="doctorBox df">
                                            <small><?= "دکتر " . $all_users_liste['full_name']; ?></small>
                                            <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> <?php  if($all_users_liste['Wednesday_clock'] != "") {echo $all_users_liste['Wednesday_clock'] ;}else{ echo "نا مشخص"; } ; ?> </small> </span>
                                            <span class="rezerv">رزرو نوبت</span>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <div data-val="Thursday" class="week_item df">
                                <h3>پنج شنبه</h3>
                                <span class="date"><?php echo toShamsi($parametrs['days']['th'],'date'); ?></span>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                    if ($all_users_liste['Thursday'] == 1 && $all_users_liste['sk_title'] == $skills_Li['title']) { ?>
                                        <div doc-val="<?= $all_users_liste['full_name']; ?>" class="doctorBox df">
                                            <small><?= "دکتر " . $all_users_liste['full_name']; ?></small>
                                            <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> <?php  if($all_users_liste['Thursday_clock'] != "") {echo $all_users_liste['Thursday_clock'] ;}else{ echo "نا مشخص"; } ; ?> </small> </span>
                                            <span class="rezerv">رزرو نوبت</span>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <div data-val="Friday" class="week_item df">
                                <h3>جمعه</h3>
                                <span class="date"><?php echo toShamsi($parametrs['days']['fri'],'date'); ?></span>
                                <?php foreach ($parametrs['doctors'] as $all_users_liste) {
                                    if ($all_users_liste['Friday'] == 1 && $all_users_liste['sk_title'] == $skills_Li['title']) { ?>
                                        <div doc-val="<?= $all_users_liste['full_name']; ?>" class="doctorBox df">
                                            <small> <?= "دکتر " . $all_users_liste['full_name']; ?></small>
                                            <span class=" time df"> <i class="far fa-clock"></i> <small dir=""> <?php  if($all_users_liste['Friday_clock'] != "") {echo $all_users_liste['Friday_clock'] ;}else{ echo "نا مشخص"; } ; ?> </small> </span>
                                            <span class="rezerv">رزرو نوبت</span>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-12">
                <?php if (count($parametrs['skills'])<3) { ?>
                    <div class="btnBox df">
                        <a href="<?= url('calender/all') ?>" class="learn_more1 df reserv_more"> مشاهده بیشتر <i class="fas fa-chevron-down"></i> </a>
                    </div>
                <?php } else { ?>
                    <div class="btnBox df">
                        <a href="<?= url('calender') ?>" class="learn_more1 df reserv_more"> مشاهده کمتر <i class="fas fa-chevron-down"></i> </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--************* Calendar code end *************-->
<div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>