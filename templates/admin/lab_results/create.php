<!--end::Toolbar-->
<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
<!--    <form method="post" class="mb-3 mb-lg-5 p-10">-->
<!--        <h2>جستجوی کاربر</h2>-->
<!--        <div class="inputBox w-100">-->
<!--            <label class="d-block mt-5">  جستجو کاربر </label>-->
<!--            <input type="text" name="" class="w-100 form-control mt-1" placeholder="لطفا نام کاربر را وارد کنید" />-->
<!--        </div>-->
<!--    </form>-->

    <hr class="mt-5 mb-5">
    <form method="post" action="<?= url('admin/lab-result/store') ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
        <h2>اپلود نتیجه آزمایش</h2>
        <div class="inputBox w-100">
            <label class="d-block mt-5">نام و نام  خانوادگی بیمار</label>
            <input type="text" name="name" class="w-100 form-control mt-1" value="" placeholder="لطفا نام و نام خانوادگی بیمار را وارد کنید" />
            <label class="d-block mt-5">نام و نام  خانوادگی دکتر معالج</label>
            <input type="text" name="doctor" class="w-100 form-control mt-1" value=""  placeholder="لطفا نام و نام خانوادگی دکتر معالج را وارد کنید" />
            <label class="d-block mt-5">  کد آزمایش </label>
            <input type="text" name="code" class="w-100 form-control mt-1" value=""  placeholder="لطفا  کد آزمایش  را وارد کنید" />
            <label class="d-block mt-5">شماره تلفن</label>
            <input type="text" name="phone" class="w-100 form-control mt-1" value=""  placeholder="لطفا  شماره تلفن کاربر را وارد کنید" />
            <?php if(isset($_GET['edit-lab'])) { ?>
                <label class="d-block mt-5">فایل نتیجه آزمایش (جهت ویرایش فایل جدید رو بارگذاری کنید درغیر این صورت خالی رد کنید)</label>
            <?php }else{ ?>
                <label class="d-block mt-5">فایل نتیجه آزمایش </label>
            <?php }?>
            <input type="file" name="file" class="w-100 form-control mt-1" />
            <div class=" d-flex align-items-center justify-content-end">
                    <button name="add_result" class="btn btn-success mt-5" style="margin-right:auto;" type="submit"> ثبت نتیجه</button>
            </div>
        </div>
    </form>



</div>
</div>