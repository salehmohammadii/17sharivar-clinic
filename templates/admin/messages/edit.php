<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">

<!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header" style="background-color:#009ef6;">
            <!--begin::Modal title-->
            <h2 class=" text-white titles2">ثبت پاسخ برای کاربر <?= $parametrs['name'] ?></h2>
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y m-5">
            <p class="h3 p-2">نام: <?= $parametrs['name'] ?></p>
            <p class="h3 p-2">شماره تماس: <?= $parametrs['phone'] ?></p>
            <p class="h3 p-2">ایمیل: <?= $parametrs['email'] ?></p>
            <p class="h3 p-2">زمان: <?= toShamsi( $parametrs['created_at']) ?></p>
            <p class="h3 p-2">موضوع پیام: <?= $parametrs['subject'] ?></p>
            <p class="h3 p-2">متن پیام: <?= $parametrs['content'] ?></p>
            <form method="post" action="<?= url('admin/messages/set-answer/'.$parametrs['id']) ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
                <div class="inputBox w-100">
                    <label class="d-block mb-2">پاسخ</label>
                    <textarea name="content" class="w-100 h-300px resize-none form-control mt-1 user-answer-content" placeholder="لطفا متن پاسخ  خود را وارد کنید" id="editor"></textarea>
                    <label class="d-block mt-5">فایل ضمیمه</label>
                    <input type="file" name="file" class="w-100 resize-none form-control mt-1" />
                    <div class=" d-flex align-items-center justify-content-end">
                        <button name="contact-answer" class="btn btn-success mt-5" style="margin-right:auto;" type="submit"> ثبت پاسخ</button>
                    </div>
                </div>
            </form>
        </div>
        <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
</div>

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