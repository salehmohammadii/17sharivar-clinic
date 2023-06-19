
                    <div class="card-body py-3 h-100">
                        <div class="acc_box w-100 d-flex">

                            <div class="helpBox w-100  border border-1">
                                <h2 class=" fs-3 my-8 ms-3">شبکه های اجتماعی</h2>
                                <div class="inner_setting ">
                                    <form action="<?= url('admin/web_settings/update') ?>" method="post" class="site_form1">
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > اینستاگرام</label>
                                            <input class="w-50 form-control" type="text" name="instagram" value=" <?= /** @var array $parametrs */
                                            $parametrs['instagram']??''; ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > واتساپ</label>
                                            <input class="w-50 form-control" type="text" name="facebook" value=" <?=$parametrs['facebook']??'' ; ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4" >
                                            <label class="w-25" >لینکدین</label>
                                            <input class="w-50 form-control" type="text" name="linkdin" value=" <?=$parametrs['linkdin']??'' ; ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > تلگرام</label>
                                            <input class="w-50 form-control" type="text" name="twiter"  value=" <?=$parametrs['twiter']??''; ?>">
                                        </div>
                                        <button name="social_items" type="submit" class=" btn btn-success ms-auto d-block me-10 w-100px">ثبت </button>
                                    </form>
                                </div>
                            </div>

                            <div class="helpBox w-100  border border-1">
                                <h2 class=" fs-3 my-8 ms-3">اطلاعات تماس</h2>
                                <div class="inner_setting ">
                                    <form action="<?= url('admin/web_settings/update') ?>" method="post" class="site_form1">
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > شماره تلفن</label>
                                            <input class="w-50 form-control" type="text" name="phone"  value=" <?=$parametrs['phone']??'' ; ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > آدرس </label>
                                            <input class="w-50 form-control" type="text" name="address"  value=" <?=$parametrs['address']??'' ; ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >ایمیل</label>
                                            <input class="w-50 form-control" type="text" name="email"  value=" <?=$parametrs['email']??'' ; ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >فکس</label>
                                            <input class="w-50 form-control" type="text" name="fax"  value=" <?=$parametrs['fax']??''; ?>">
                                        </div>
                                        <button name="site_contact" type="submit" class=" btn btn-success ms-auto d-block me-10 w-100px">ثبت </button>
                                    </form>
                                </div>
                            </div>

                            <div class="helpBox w-100  border border-1">
                                <h2 class=" fs-3 my-8 ms-3">لوگو سایت </h2>
                                <div class="inner_setting ">
                                    <form action="<?= url('admin/web_settings/update') ?>"  method="post" class="site_form1" enctype="multipart/form-data">
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > هدر سایت</label>
                                            <input class="w-50 form-control" type="file" name="header">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > فوتر سایت</label>
                                            <input class="w-50 form-control" type="file" name="footer">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > favicon</label>
                                            <input class="w-50 form-control" type="file" name="favicon">
                                        </div>
                                        <button name="logo" type="submit" class=" btn btn-success ms-auto d-block me-10 w-100px">ثبت </button>
                                    </form>
                                </div>
                            </div>

                            <div class="helpBox w-100  border border-1">
                                <h2 class=" fs-3 my-8 ms-3">فوتر سایت </h2>
                                <div class="inner_setting ">
                                    <form action="<?= url('admin/web_settings/update') ?>"  method="post" class="site_form1">
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >متن درباره ما</label>
                                            <input class="w-50 form-control" type="text" name="about"  value="<?=$parametrs['about']??'' ; ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > متن کپی رایت </label>
                                            <input class="w-50 form-control" type="text" name="copy_right"  value="<?=$parametrs['copy_right']??'' ; ?>">
                                        </div>
                                        <button name="footer_config" type="submit" class=" btn btn-success ms-auto d-block me-10 w-100px">ثبت </button>
                                    </form>
                                </div>
                            </div>

                            <div class="helpBox w-100  border border-1">
                                <h2 class=" fs-3 my-8 ms-3">تنظیمات سئو محلی</h2>
                                <div class="inner_setting ">
                                    <form  method="post" action="<?= url('admin/web_settings/update') ?>" class="site_form1">
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >کشور</label>
                                            <input class="w-50 form-control" type="text" name="country"  value="<?=$parametrs['country']??''  ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > شهر </label>
                                            <input class="w-50 form-control" type="text" name="city"  value="<?=$parametrs['city']??''  ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >طول و عرض جغرافیایی</label>
                                            <input class="w-50 form-control" type="text" name="X_Y"  value="<?= $parametrs['X_Y']??''  ?>">
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >عنوان سایت</label>
                                            <input class="w-50 form-control" type="text" name="site_name"  value="<?= $parametrs['site_name']??'' ?>">
                                        </div>
                                        <button name="local_seo" type="submit" class=" btn btn-success ms-auto d-block me-10 w-100px">ثبت </button>
                                    </form>
                                </div>
                            </div>
                            <div class="helpBox w-100  border border-1">
                                <h2 class=" fs-3 my-8 ms-3">تنظیمات صفحه اصلی</h2>
                                <div class="inner_setting ">
                                    <form  method="post" action="<?= url('admin/web_settings/update') ?>" class="site_form1">
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >درباره ما</label>
                                            <textarea name="about_summary" class="w-100 h-300px resize-none form-control mt-5 editor"  id="editor"></textarea>
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">

                                        <label class="d-block mt-5">عکس درباره ما</label>

                                        <input type="file" name="about_poster" class="w-25 form-control mt-1" />
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" > داروخانه </label>
                                            <textarea name="drugstore_summary" class="w-100 h-300px resize-none form-control mt-5 editor"  id="editor"></textarea>
                                        </div>
                                        <div class="link_item  w-100 d-flex align-items-center justify-content-center mb-4">
                                            <label class="w-25" >خیریه</label>
                                            <textarea name="charity_summary" class="w-100 h-300px resize-none form-control mt-5 editor"  id="editor"></textarea>
                                        </div>
                                        <button  type="submit" class=" btn btn-success ms-auto d-block me-10 w-100px">ثبت </button>
                                    </form>
                                </div>
                            </div>
                        </div>



                    </div>
                    <script src="../assets/plugins/global/plugins.bundle.js"></script>
                    <script src="../assets/js/scripts.bundle.js"></script>

                    <!--end::Global Javascript Bundle-->
                    <!--begin::Page سفارشی Javascript(used by this page)-->
                    <script src="<?= assets('public/admin/js/widgets.bundle.js') ?>../assets/js/"></script>
                    <script src="<?= assets('public/admin/js/custom/widgets.js') ?>../assets/js/"></script>
                    <script src="<?= assets('public/admin/js/') ?>../assets/js/custom/utilities/modals/users-search.js"></script>
                    <script src="<?= assets('public/admin/js/tag.js') ?>../assets/js/"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script src="<?= assets('public/admin/js/blog_validate.js') ?>../assets/js/"></script>
                    <script src="<?= assets('public/admin/tinymce/tinymce.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/emoticons/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/hr/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/autosave/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/advlist/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/autolink/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/lists/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/link/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/tinymce/plugins/image/plugin.min.js') ?>"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/charmap/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/print/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/anchor/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/textcolor/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/searchreplace/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/visualblocks/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/code/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/fullscreen/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/insertdatetime/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/media/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/table/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/contextmenu/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/paste/plugin.min.js"></script>
                    <script src="<?= assets('public/admin/js/') ?>../editor/tinymce/plugins/help/plugin.min.js"></script>
                    <script>
                        tinymce.init({
                            selector: '.editor',
                            height: 450,
                            language: 'fa',
                            menubar: true,
                            plugins: [
                                'advlist autolink lists link image charmap print anchor textcolor',
                                'searchreplace visualblocks code fullscreen',
                                'insertdatetime media table contextmenu paste code help wordcount',
                                'emoticons hr autosave '
                            ],
                            toolbar: 'undo redo | image link emoticons hr |  formatselect | bold italic underline forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat print restoredraft wordcount code',
                            autosave_interval: "10s",
                            autosave_prefix: "tinymce-autosave-{path}{query}-{id}-",
                        });
                    </script>