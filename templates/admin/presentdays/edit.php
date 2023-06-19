<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <form method="post" action="<?= url('admin/doctor/update/'.$parametrs['doctor']['id']) ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
        <h2>ایجاد دکتر جدید</h2>
        <div class="inputBox w-100">
            <label class="d-block mt-5"> نام و نام خانوادگی دکتر </label>
            <input type="text" name="full_name" class="w-100 form-control mt-1" value="<?php /** @var array $parametrs */
            echo $parametrs['doctor']['full_name']; ?>" placeholder="لطفا نام و نام خانوادگی کاربر را وارد کنید" />
            <label class="d-block mt-5">شماره تلفن</label>
            <input type="text" name="phone" class="w-100 form-control mt-1" value="<?php  echo $parametrs['doctor']['phone']; ?>" placeholder="لطفا  شماره تلفن کاربر را وارد کنید" />
            <label class="d-block mt-5">ادرس</label>
            <input type="text" name="address" class="w-100 form-control mt-1" value="<?php echo $parametrs['doctor']['address']; ?>" placeholder="لطفا  ادرس کاربر را وارد کنید" />
            <label class="d-block mt-5">کد پرسنلی</label>
            <input type="text" name="personalCode" class="w-100 form-control mt-1" value="<?php  echo $parametrs['doctor']['personalCode']; ?>" placeholder="لطفا  کد پرسنلی کاربر را وارد کنید" />
            <label class="d-block mt-5">ساعت حضور</label>
            <input type="text" name="online_time" class="w-100 form-control mt-1" value="<?php echo $parametrs['doctor']['online_time']; ?>" placeholder="لطفا  کد پرسنلی کاربر را وارد کنید" />
            <label class="d-block mt-5"> پسورد حساب کاربری (برای ساخت پسورد سیستمی این فیلد را خالی رد کنید)</label>
            <input type="password" name="password" value="<?php echo $parametrs['doctor']['password']; ?>" class="w-100 form-control mt-1" placeholder="لطفا پسورد کاربر را وارد کنید" />
            <label class="d-block mt-5"> نوع تخصص</label>
            <select name="skill" class="w-100 form-control mt-1">
                <option value=" " selected > انتخاب نوع تخصص  </option>
                <?php foreach($parametrs['skills'] as $skills_Li) { ?>
                    <option <?php if($parametrs['doctor']['skill']==$skills_Li['id']){echo "selected";} ?>  value="<?=$skills_Li['id'] ?>"> <?=$skills_Li['id'] ?> </option>
                <?php } ?>
            </select>
            <?php if(isset($_GET['edit-doctor'])) { ?>
                <label class="d-block mt-5">عکس پروفایل ( جهت استفاده از عکس قبلی فیلد را خالی رد کنید )</label>
            <?php } else{ ?>
                <label class="d-block mt-5">عکس پروفایل ( اختیاری )</label>
            <?php } ?>
            <input type="file" name="profile" class="w-100 form-control mt-1" />
            <label class="d-block mt-5">رزومه کاربر</label>
            <textarea dir="rtl" name="resume" class="editor" id="editor"><?php  echo $parametrs['doctor']['resume']; ?></textarea>
            <div class=" d-flex align-items-center justify-content-end">
                    <button name="edit-doctor" class="btn btn-success mt-5" style="margin-right:auto;" type="submit">ویرایش کردن دکتر</button>
            </div>
        </div>
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