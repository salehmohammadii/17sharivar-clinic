<form method="post" class="mb-3 mb-lg-5 p-10" action="<?= url('admin/post/store') ?>" autocomplete="on" enctype="multipart/form-data">
    <div class="inputBox w-100">
        <label class="d-block">عنوان مقاله</label>
        <input name="title" class="w-100 form-control mt-1 blog_input" placeholder="لطفا عنوان مقاله را وارد کنید" />
        <label class="d-block mt-5">توضیحات کوتاه (لید)</label>
        <textarea  dir="rtl" name="content" class="editor" id="editor"></textarea>
        <label class="d-block mt-5">محتوا اصلی</label>
        <textarea  dir="rtl" name="content2" class="editor" id="editor"></textarea>
        <label class="d-block mt-5">دسته بندی مقاله</label>
        <select name="type" class="w-100 form-control mt-1">
            <option value="عمومی" selected> دسته بندی مقاله </option>
            <?php foreach ($parametrs as $article_items_li) { ?>
                <option value="<?= $article_items_li['id'] ?>"> <?= $article_items_li['title'] ?> </option>
            <?php } ?>
        </select>
        <label class="d-block mt-5">تصویر شاخص</label>
        <input type="file" name="poster" class="w-100 form-control mt-1 blog_input" />
        <label class="d-block mt-5">برچسب ها</label>
        <input type="text" name="tags" id="tag-input1" class="w-100 form-control mt-1 blog_input" placeholder="لطفا برچسب های مقاله را وارد کنید">
        <label class="d-block mt-5">مدت زمان مطالعه مقاله</label>
        <input name="time" class="w-100 form-control mt-1 blog_input" placeholder="لطفا مدت زمان مطالعه مقاله را وارد کنید (فقط عدد)" />
        <label class="d-block mt-5">نویسنده</label>
        <input name="writer" class="w-100 form-control mt-1 blog_input" placeholder="لطفا نویسنده مقاله را وارد کنید" />
        <label class="d-block mt-5">منبع</label>
        <input name="surce" class="w-100 form-control mt-1 blog_input" placeholder="لطفا منبع مقاله را وارد کنید" />
        <label class="d-block mt-5">فایل مقاله (فقط فایل PDF)</label>
        <input type="file" name="pdf" class="w-100 form-control mt-1 blog_input" />
        <label class="d-block mt-5">  URL مقاله (از وارد کردن - در url خود داری نمایید)</label>
        <input name="url" class="w-100 form-control mt-1 blog_input" placeholder="لطفا URL مقاله را وارد کنید" />
        <label class="d-block mt-5">عنوان سئو</label>
        <input name="seo_title" class="w-100 form-control mt-1 blog_input" placeholder="عنوان سئو مقاله را وارد کنید" />
        <label class="d-block mt-5">توضیحات سئو</label>
        <textarea  name="seo_desc" class="w-100 h-250px form-control mt-1 blog_input" placeholder="متن توضیحات سئو را وارد کنید"></textarea>
        <label class="d-block mt-5">اسکرپیت (اختیاری)</label>
        <textarea  name="scripts" class="w-100 h-250px form-control mt-1 "  placeholder="لطفا درصورت وجود کد , کد را دراین فیلد وارد کنید"></textarea>
        <div class=" d-flex align-items-center justify-content-end">
            <button name="add_article" class="btn btn-success mt-5 blog_insert_btn" style="margin-right:auto;" type="submit">افزودن</button>
        </div>
    </div>
</form>
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