<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <form method="post" action="<?= url('admin/web_settings/update') ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
        <h2>تنظیمات صفحه اصلی</h2>
        <div class="inputBox w-100 mt-5  "  style="margin-bottom: 80px">
            <label class="d-block mt-5">عکس صفحه اصلی درباره ما</label>
            <input type="file" name="about_poster" class="w-100 form-control mt-1" />
            <label class="d-block mt-5">متن درباره ما</label>
            <textarea dir="rtl" name="about_summary" class="editor" id="editor"><?= $parametrs['about_summary'] ?></textarea>
            <div class=" d-flex align-items-center justify-content-end">
            </div>
        </div>
        <div class="inputBox w-100 mt-5  "  style="margin-bottom: 80px">

            <label class="d-block mt-5">متن داروخانه</label>
            <textarea dir="rtl" name="drugstore_summary" class="editor" id="editor"><?= $parametrs['drugstore_summary'] ?></textarea>
            <div class=" d-flex align-items-center justify-content-end">
            </div>
        </div>
        <div class="inputBox w-100 mt-5  "  style="margin-bottom: 80px">
            <label class="d-block mt-5">متن خیریه</label>
            <textarea dir="rtl" name="charity_summary" class="editor" id="editor"><?= $parametrs['charity_summary'] ?></textarea>
            <div class=" d-flex align-items-center justify-content-end">
            </div>
        </div>
        <button  type="submit" class=" btn btn-success ms-auto d-block me-10 w-100px">ثبت </button>
    </form>
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