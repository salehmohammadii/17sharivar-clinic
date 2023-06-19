<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <!-- SEO Premium -->
    <title>درمانگاه 17 شهریور</title>
    <meta name="description" content="درمانگاه 17 شهـریور از سال 1370 در شهر تـهران فعالیت خود را آغاز نمود و در طی سال ها با همکاری مستمر با پزشـکان و کادر درمانی متـخصص توانست یکی از بهترین مراکز درمانی کشور باشد." />
    <link rel="canonical" href="<?= current_domain() ?>" />
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="درمانگاه 17 شهریور"/>
    <meta property="og:description" content="درمانگاه 17 شهـریور از سال 1370 در شهر تـهران فعالیت خود را آغاز نمود و در طی سال ها با همکاری مستمر با پزشـکان و کادر درمانی متـخصص توانست یکی از بهترین مراکز درمانی کشور باشد." />
    <meta property="og:url" content="<?=  current_domain() ?>" />
    <meta property="og:site_name" content="درمانگاه 17 شهریور" />
    <meta property="article:published_time" content="2022-10-21T11:31:10+00:00" />
    <meta property="og:image" content="https://17shahrivarclinic.com/uploads/45617logo%20clinic%20-%20Copy.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:image:type" content="image/png" />
    <meta name="author" content="تحریریه درمانگاه 17 شهریور" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="<?=  current_domain() ?>" />
    <meta name="twitter:site" content="<?=  current_domain() ?>" />
    <meta name="twitter:label1" content="نوشته شده توسط" />
    <meta name="twitter:data1" content="تحریریه درمانگاه 17 شهریور" />
    <meta name="twitter:label2" content="زمان تخمینی مطالعه" />
    <meta name="twitter:data2" content="5 دقیقه" />
    <link rel="shortcut icon" href="<?= /** @var array $parametrs */
    assets($parametrs['settings']['favicon']) ?>" />

    <!--	<meta name="geo.placename" content="--><?//=$all_seo_info['city'] ?><!--" />-->
    <!--	<meta name="geo.position" content="--><?//=$all_seo_info['X_Y'] ?><!--" /> -->
    <!--	<meta name="geo.region" content="--><?//=$all_seo_info['country'] ?><!--" />-->
    <!--	<script type="application/ld+json">---------- SCRIPT HERE -----------</script> -->
    <!-- / SEO Premium -->
    <link rel="stylesheet" href="<?= assets('public/app/css/normalize.css')  ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/font.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/grid.css')?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/app.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/user.css')  ?>">

    <link rel="stylesheet" href="<?= assets('public/app/css/hepler-css.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/slider.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/page-style.css') ?>">
    <link rel="stylesheet" href="<?= assets('public/app/css/animate.css') ?>" />
</head>
<body>
<header class="header">
    <div class="container ower-flow-none">
        <div class="row S_B">
            <div class="col-2">
                <div class="header_title df">
                    <img src="<?= /** @var array $parametrs */
                    assets( $parametrs['settings']['header'])?>" alt="LOGO">
                    <!--         <h1>درمانگاه تخصصی 17 شهریور</h1>
                             <div class="header_box1 df" dir="ltr">
                                 <span>17 <sup> th </sub> </span> <span> SHAHRIVAR CLINIC </span>
                             </div>
                              <span class="menu_btn"><i class="fas fa-bars"></i></span> -->
                </div>
            </div>
            <div class="col-8 m_navbar">
                <nav class="navbar">
                    <div class="header_title2  dn1">
                        <h1  >درمانگاه تخصصی 17 شهریور</h1>
                        <div class="header_box1 df" dir="ltr">
                            <span>17 <sub> th </sub> </span> <span> SHARIVAR CLINIC </span>
                        </div>
                    </div>
                    <ul class="menu df">
                        <li class="menu_item"><a href="<?= url('') ?>" class="menu_link">صفحه اصلی</a></li>

                        <li class="menu_item Paraclinic_btn"><a  href="<?= url('paraclinic') ?>" class="menu_link">پاراکلینیک<i class=" fas fa-chevron-down"></i> </a>
                            <ul class="subMenu">
                                <?php if (count($parametrs['paraclinics']) >= 1) {
                                    foreach ($parametrs['paraclinics'] as $para_clinic_List) { ?>
                                        <li> <a href="<?= url('/paraclinic/'.urlencode( $para_clinic_List['title'])) ?>" class="subMenu_link"><?= $para_clinic_List['title'] ?></a></li>
                                    <?php }
                                } else { ?>
                                    <span class="page_msg">!هیچ موردی در سایت ثبت نشده است</span>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="menu_item Paraclinic_btn"><a href="<?= url('health-service') ?>" class="menu_link">خدمات درمانی<i class=" fas fa-chevron-down"></i></a>
                            <ul class="subMenu">
                                <?php if (count($parametrs['health_services']) >= 1) {
                                    foreach ($parametrs['health_services'] as $para_clinic_List) { ?>
                                        <li> <a href="<?= url('/health-service/'.urlencode( $para_clinic_List['title'])) ?>" class="subMenu_link"><?= $para_clinic_List['title'] ?></a></li>
                                    <?php }
                                } else { ?>
                                    <span class="page_msg">!هیچ موردی در سایت ثبت نشده است</span>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="menu_item"><a href="<?= url('about-us') ?>" class="menu_link">درباره ما</a></li>
                        <li class="menu_item"><a href="<?= url('calender') ?>" class="menu_link">تقویم پزشکان</a></li>
                        <li class="menu_item"><a href="<?= url('lab-result') ?>" class="menu_link">جواب آزمایش</a></li>
                        <?php  if (isset($_SESSION['user'])) {
                            if ($_SESSION['roll'] == 1) { ?>
                                <li class="menu_item"><a href="<?= url('admin') ?>" class="menu_link">پنل مدیریت</a></li>
                            <?php }
                        } ?>
                    </ul>
                    <span class="menu_close"><i class="fas fa-times"></i></span>
                </nav>
            </div>
            <div class="col-5 col-md-2 col-lg-2">
                <?php if (isset($_SESSION['user'])) { ?>
                    <div class="user_box df">
                        <a href="<?= url('auth/logout') ?>" class="login">خروج</a>
                        <a href="#" class="auth/register">پروفایل</a>
                    </div>
                <?php } else { ?>
                    <div class="user_box df">
                        <a href="<?= url('auth/login') ?>" class="login">ورود ‌</a>
                        <a href="<?= url('auth/register') ?>" class="register">ثبت نام</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</header>
