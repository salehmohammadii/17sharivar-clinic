<section>
    <div class="container ">
        <div class="container  ">

            <img class='w-100' src="../images/Blog.png" alt="">

        </div>
    </div>
    </div>
</section>
<!-- ************ About_title img title code end ************* -->
<main>
    <!-- ************ linkBox   code start ************* -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="linkBox About_content_LinkBox df">
                        <a href="<?= url('') ?>">خانه</a>
                        <a href="<?= url('doctors') ?>">پزشکان</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ linkBox   code end ************* -->
    <section>
        <div class="container">
                <?php /** @var array $parametrs */
                if (count($parametrs['posts']) >= 1) { ?>
                    <div class="box df">
                        <?php foreach ($parametrs['posts'] as $articles_List) { ?>
                            <div class="box2">
                                <div class="box3_header df">
                                    <span><?= $articles_List['sk_title'] ?></span>
                                </div>
                                <div class="box2_poster">
                                    <img src="<?= assets( $articles_List['profile']); ?>" alt="poster">
                                </div>
                                <h2><?= $articles_List['full_name']; ?></h2>
                                <span><?= $articles_List['resume']; ?> </span>

                            </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <?php if (flash('all_blog')=='false') { ?>
                        <a href="../site/blogs?all=true" class=" learn_more1 learn_more5"> مشاهده بیشتر <i class=" fas fa-chevron-down"></i> </a>
                    <?php } else { ?>
                        <a href="../site/blogs" class=" learn_more1 learn_more5"> مشاهده کمتر <i class=" fas fa-chevron-down"></i> </a>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>
</main>
<div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
</div>