<section>
    <div class="container  ">

        <img class='w-100' src="<?= assets('public/app/img/Blog.png') ?>" alt="">

    </div>
</section>
<!-- ************ Calendar img title code end ************* -->
<?php /** @var array $parametrs */
if (count($parametrs['post']) >= 1) { ?>
    <!-- ************ linkBox   code start ************* -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="linkBox df" style="margin-top: 20px ;">
                        <a href="../">خانه</a>
                        <a class="blog-linkBox" href="blogs">بلاگ</a>
                        <a href="<?=url('blog/'.urlencode($parametrs['post']['seo_title'])) ; ?>"><?= $parametrs['post']['seo_title']?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ linkBox   code end ************* -->
    <!--************* About_info code start *************-->
    <section>
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="article_title">
                        <div class="article_title_p1 df">
                            <h1><?= $parametrs['post']['seo_title'] ?></h1>
                            <a href="<?= assets( $parametrs['post']['pdf']); ?>" download> <img width="30" src="<?=assets( 'public/app/img/download.png')?>" alt="download-icon"> دانلود مقاله </a>
                        </div>
                        <div class="article_title_p2 df">
                            <span class="df"><i class="far fa-clock"></i>مدت زمان مطالعه <?= $parametrs['post']['time'] ?> دقیقه </span>
                            <span class="df"><i class="far fa-heart"></i><?= $parametrs['post']['reat_num']; ?> نفر این مقاله را پسندیده اند    </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="article_body df">
                        <div class="article_innerBody1 df">
                            <?= $parametrs['post']['content']; ?>
                            <img src="<?=assets( $parametrs['post']['poster']); ?>" alt="Articles-Pi">
                        </div>
                        <div class="article_innerBody2 trems_items trems_items2">
                            <?= $parametrs['post']['content2']; ?>
                        </div>
                        <!--    <?php if ($parametrs['post']['scripts'] != "empty") { ?>
                                    <div class="article_innerBody2 code_box" dir="ltr">
                                        <code>
                                            <?= $parametrs['post']['scripts']; ?>
                                        </code>
                                    </div>
                                <?php } ?> -->
                    </div>
                </div>
                <div class="col-12">
                    <div class="tagBox df">
                        <div class="tag_box1">
                            <?php if($parametrs['suggested_posts']!=false and count($parametrs['suggested_posts'])>=1) { ?>
                                <span>مقاله مرتبط:<a href="<?=url('blog/'.urlencode($parametrs['suggested_posts']['seo_title']))  ?>"><?= $parametrs['suggested_posts']['title']; ?></a></span>

                            <?php } ?>

                            <div class="tags df">
                                <h2>برچسب ها</h2>
                                <?php $tags = explode(",", $parametrs['post']['tags']);
                                foreach ($tags as $tag) {
                                    ?>
                                    <a href="<?=url('tag/'.urlencode($tag)) ; ?>"><?= $tag; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="share df">
                            <span>این مقاله را با دوستانتان به اشتراک بگذارید:</span>
                            <a href="tg://msg_url?url=<?= url('blog/'.urlencode($parametrs['post']['seo_title'])) ?>"><img width="25" src="<?= assets('public/app/img/02.webp') ?>" alt="ins"></a>
                            <a href="https://eitaa.com/share/url?url=<?= url('blog/'.urlencode($parametrs['post']['seo_title'])) ?>"><img width="25" src="<?= assets('public/app/img/04.png') ?>" alt="linkdin"></a>
                            <a href="mailto:?subject=<?= $parametrs['post']['seo_title'] ?>&body=این مقاله رو حتما چک کن:%20<?= url('blog/'.urlencode($parametrs['post']['seo_title'])) ?>"><img width="20" src="<?= assets('public/app/img/03.png') ?>" alt="facebook"></a>
                            <a href="whatsapp://send?text=<?= url('blog/'.urlencode($parametrs['post']['seo_title'])) ?>"><img width="20" src="<?= assets('public/app/img/01.png') ?>" alt="facebook"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="comentBody">
                        <div class="comentBox1 comentBox_two df">
                            <div class="coment_title df">
                                <img width="40" src="<?= assets('public/app/img/comment.png') ?>" alt="comment">
                                <h3>دیدگاه شما</h3>
                            </div>
                            <div class="coment_rating df">
                                <span>به این مقاله امتیاز دهید:</span>
                                <span class="reat"><?= round($parametrs['post']['reat'], 1); ?></span>
                                <small class="reat_num">(<?=$parametrs['post']['reat_num']; ?> نفر)</small>
                                <div class="starBox df">
                                    <span article="<?= $parametrs['post']['seo_title']; ?>" val="1"><i class="fas fa-star"></i></span>
                                    <span article="<?= $parametrs['post']['seo_title']; ?>" val="2"><i class="fas fa-star"></i></span>
                                    <span article="<?= $parametrs['post']['seo_title']; ?>" val="3"><i class="fas fa-star"></i></span>
                                    <span article="<?= $parametrs['post']['seo_title']; ?>" val="4"><i class="fas fa-star"></i></span>
                                    <span article="<?= $parametrs['post']['seo_title']; ?>" val="5"><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="coment_Form">
                            <form method="post" action="<?= url('comment/store') ?>" class="coment_Frm" autocomplete="on">
                                <div class="coment_frm1">
                                    <input name="name" class="coment_info coment_info2 C_input" type="text" placeholder="نام و نام خانوادگی">
                                    <input name="phone" class="coment_info coment_info2 C_input" type="text" placeholder="تلفن همراه">
                                    <input name="article" class="C_input" type="hidden" value="<?= $parametrs['post']['id']; ?>">
                                    <textarea name="content" class="content C_input coment_info2" placeholder="دیدگاه شما"></textarea>
                                </div>
                                <div class="btnBox df">
                                    <div class="capchaBox article_capchabox df">
                                        <div class="code df">
                                            <span class="num1">0</span>
                                            <span class="action">+</span>
                                            <span class="num2">0</span>
                                        </div>
                                        <input class="capcha_input" name="capcha" type="text" placeholder="پاسخ عبارت">
                                    </div>
                                    <button class="coment_btn" type="submit" name="send_comment">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************* About_info code end *************-->
    <!--************* user comments code start *************-->
    <section>
        <div class="container">
            <div class="About_title_box df">
                <img width="60" src="../images/saham.png" alt="">
                <h2>دیدگاه کاربران</h2>
            </div>
            <div class="d-flex justify-content-center">
                <div class=" user_commentsBox w-100">
                    <div>
                        <?php if (count($parametrs['comments']) >= 1) { ?>
                            <div  class=" w-100">
                                <div class="" >
                                    <?php foreach ($parametrs['comments'] as $comments_item) {
                                        $date="<span direction='ltr' dir='ltr' style='direction: rtl'>".toShamsi($comments_item['created_at'])."</span>";
                                        ?>
                                            <div class="cmmBox">
                                                <div class=" commentBox_item w-100">
                                                    <img  src="<?= assets('public/app/img/vector.png') ?>" alt="">
                                                    <div class="box3">
                                                        <div class="box3_part1" dir="ltr">
                                                            <span data-id="<?=$comments_item['id'] ?>" class="replay_btn">پاسخ </span>

                                                            <small>

                                                                :<?= $comments_item['name']. " در تاریخ :  " . $date ."  گفت  "; ?>
                                                            </small>
                                                        </div>
                                                        <div class="box3_part2">
                                                            <p><?= $comments_item['content']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php foreach($comments_item['replies'] as $comments_replay_item){
                                                    $date="<span direction='ltr' dir='ltr' style='direction: rtl'>".toShamsi($comments_replay_item['created_at'])."</span>";
                                                    ?>
                                                    <div class=" commentBox_item commentBox_item2">
                                                        <img  src="<?= assets('public/app/img/vector.png') ?>" alt="">
                                                        <div class="box3">
                                                            <div class="box3_part1" dir="ltr">
                                                                <span></span>
                                                                <small > :<?= $comments_replay_item['name']. " در تاریخ :  " . $date ."  پاسخ داد  "; ?></small>
                                                            </div>
                                                            <div class="box3_part2">
                                                                <p><?= $comments_replay_item['content']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php
                                    } ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <span class="page_msg" style="display: block; margin-bottom:20px;">هیج نظری برای این مقاله ثبت نشده است!</span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*************  user comments code  end *************-->
<?php
}
?>

<div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>

<div class="modal"  id="modal"></div>
<div class="alert" id="alert" style="z-index: 99999;">
    <div class="alert__header">
        <h2 class="alert__title">ثبت پاسخ برای کامنت کاربر</h2>
        <button class="alert__close-btn" onclick="closeAlert()" id="close-alert-btn"><i class="fa fa-xmark"></i></button>
    </div>
    <form action="<?= url('comment/reply') ?>"  method="post">
        <div class="alert__body">
            <textarea name="content" class="content  coment_info2" placeholder="دیدگاه شما"></textarea>
            <input type="hidden" name="id" class="comment_id">
        </div>
        <div class="alert__footer">
            <button type="submit" >ثبت پاسخ</button>
        </div>
    </form>
</div>

<script src="<?= assets('public/app/js/modal.js') ?>"></script>
<script src="<?= assets('public/app/js/comments.js') ?>"></script>
<script src="<?= assets('public/app/js/comments_input_validate.js') ?>"></script>
