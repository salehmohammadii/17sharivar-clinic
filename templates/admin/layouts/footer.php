<!--begin::Footer--><div class="footer py-4 d-flex flex-lg-column" id="kt_footer">    <!--begin::Container-->    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">        <!--begin::Copyright-->        <div class="text-dark order-2 order-md-1">            <span class="text-muted fw-bold me-1">2022©</span>            <a href="https://ITQuest.org" target="_blank" class="text-gray-800 text-hover-primary">طراحی و توسعه توسط تاک مارکتینگ</a>        </div>        <!--end::Copyright-->    </div>    <!--end::Container--></div><!--end::Footer--></div><!--end::Wrapper--></div><!--end::Page--></div><!--end::Root--><!--end::Main--><!--begin::Scrolltop--><div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->    <span class="svg-icon">            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />            </svg>        </span>    <!--end::Svg Icon--></div><!--end::Scrolltop--><!--begin::Javascript--><script>    var hostUrl = "http://localhost/";</script><!--begin::Global Javascript Bundle(used by all pages)--><script src="<?= assets('public/admin/plugins/global/plugins.bundle.js') ?>"></script><script src="<?= assets('public/admin/js/scripts.bundle.js') ?>"></script><!--<!--end::Global Javascript Bundle--s>--><!--<!--begin::Page سفارشی Javascript(used by this page)-->--><script src="<?= assets('public/admin/js/widgets.bundle.js') ?>"></script><script src="<?= assets('public/admin/js/custom/widgets.js') ?>"></script><script src="<?= assets('public/admin/js/custom/utilities/modals/users-search.js') ?>"></script><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><script src="<?= assets('public/admin/js/site-setting.js') ?>"></script><script src="<?= assets('public/admin/js/slider-setting.js') ?>"></script><script src="<?= assets('public/admin/js/about-page-info-fetch.js') ?>"></script><script src="<?= assets('public/admin/js/about-page-info-fetch2.js') ?>"></script><script src="<?= assets('public/admin/js/blog_validate.js') ?>"></script><script src="<?= assets('public/admin/js/checkbox.js') ?>"></script><script src="<?= assets('public/admin/js/comments-answer.js') ?>"></script><script src="<?= assets('public/admin/js/contact-answer.js') ?>"></script><script src="<?= assets('public/admin/js/hidden.js') ?>"></script><script src="<?= assets('public/admin/js/tag.js') ?>"></script><script src="<?= assets('public/admin/js/theme.js') ?>"></script><!--end::Page custom Javascript--><!--end::Javascript--></body><!--end::Body--></html><?phpif (isset($_GET['action']) and $_GET['action']==true) {    ?>    <script>        var url=location.href;        url= url.replace('?action=true','');        window.history.pushState([],'کلینیک 17 شهریور',url);        swal("موفق", "عملیات باموفقیت انجام شد", "success");        setTimeout(function(){            var url=location.href;        },2000);    </script><?php }if (isset($_GET['action']) and $_GET['action']==='0') {    ?>    <script>        var url=location.href;        url.replace('?action=false','');        window.history.pushState([],'کلینیک 17 شهریور',url);        swal("ناموفق", "متاسفانه مشکلی رخ داده است", "error");        setTimeout(function(){        },2000);    </script><?php } ?>