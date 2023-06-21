<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <form action="<?= url('admin/health-service/update/'.$parametrs['para']['id']) ?>" method="post" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
        <h2>ویرایش</h2>
        <div class="inputBox w-100">
            <label class="d-block mt-5">عنوان خدمات</label>
            <input type="text" name="title" class="w-100 form-control mt-1" value="<?php
                echo $parametrs['para']['title'];
            ?>" placeholder="لطفا عنوان خدمات   را وارد کنید" />
            <label class="d-block mt-5">نوع خدمات درمانی</label>
            <select name="child_of" class="w-100 form-control mt-1">
                <option value="0" selected > انتخاب نوع خدمات درمانی  </option>
                <?= $parametrs['all'] ?>
            </select>
                <label class="d-block mt-5">عکس کناری ( جهت استفاده از عکس قبلی فیلد را خالی رد کنید )</label>
            <input type="file" name="poster" class="w-100 form-control mt-1" />
            <label class="d-block mt-5">عکس صفحه خدمات درمانی</label>
            <input type="file" name="page_poster" class="w-100 form-control mt-1" />
            <label class="d-block mt-5">توضیحات</label>
            <textarea dir="rtl" name="content" class="editor" id="editor">
                  <?= $parametrs['para']['content'];?>
              </textarea>
            <label class="d-block mt-5">  URL خدمات (از وارد کردن - در url خود داری نمایید)</label>
            <input name="url" class="w-100 form-control mt-1 blog_input" value="  <?= $parametrs['para']['url'];?>" placeholder="لطفا URL خدمات  را وارد کنید" />
            <div class=" d-flex align-items-center justify-content-end">
                    <button  class="btn btn-success mt-5" style="margin-right:auto;" type="submit">ویرایش کردن خدمات</button>
            </div>
        </div>
    </form>
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