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
                        <a href="../../../">خانه</a>
                        <a href="blogs">بلاگ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ linkBox   code end ************* -->
    <section>
        <div class="container">
            <div class="row bg">
                <?php /** @var array $parametrs */
                if (count($parametrs['posts']) >= 1) { ?>
                    <div class="col-12 col-md-12 col-lg-3">
                        <div class="asideBox">
                            <aside class="sidbar df">
                                <div class="category  df">
                                    <h1 class="df">دسته بندی<i class="fas fa-chevron-down"></i> </h1>
                                    <div class="cat_itemsBox cat_itemsBox1">
                                        <?php foreach ($parametrs['categories'] as $categpry_List) { ?>
                                            <a href="<?= url('category/'.clinik_urlencode($categpry_List['title'])) ; ?>"> <?= $categpry_List['title']; ?> </a>
                                        <?php } ?>
                                    </div>
                                    <div class="scrollBox">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="category category2 df">
                                    <h2 class="df">جدیدترین مطالب<i class="fas fa-chevron-down"></i> </h2>
                                    <div class="cat_itemsBox cat_itemsBox2">
                                        <?php foreach ($parametrs['posts'] as $articles_List) { ?>
                                            <a href="<?=url('blog/'.clinik_urlencode( $articles_List['url'])) ; ?>"> <?= $articles_List['title']; ?> </a>
                                        <?php } ?>
                                    </div>
                                    <div class="scrollBox">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="tags tags2 df">
                                    <h3 class="df">برچسب ها <i class="fas fa-chevron-down"></i></h3>
                                    <?php $tags = explode(",", $articles_List['tags']);
                                    foreach ($tags as $tag) {
                                        ?>
                                        <a href="<?= url('tag/'.clinik_urlencode($tag)) ; ?>"><?= $tag; ?></a>
                                    <?php } ?>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-9">
                        <div class="box df">
                                <?php foreach ($parametrs['posts'] as $articles_List) { ?>
                                    <div class="box2">
                                        <div class="box2_header df">
                                            <span>مقاله</span>
                                            <small style="direction: ltr;"><?= toShamsi( $articles_List['created_at']); ?></small>
                                        </div>
                                        <div class="box2_poster">
                                            <img src="<?= assets( $articles_List['poster']); ?>" alt="poster">
                                        </div>
                                        <h2><?= $articles_List['title']; ?></h2>
                                        <span><i class="far fa-clock"></i> مدت زمان مطالعه <?= $articles_List['time']; ?> دقیقه </span>
                                        <a class="learn_more4 df" href="<?=url('blog/'.clinik_urlencode($articles_List['url'])) ; ?>">بیشتر بخوانید <i class="fas fa-angle-left"></i> </a>
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