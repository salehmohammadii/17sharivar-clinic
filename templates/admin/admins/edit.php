<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <span class="alert alert-danger d-block mt-5 text-center"> ادمین عزیز کاربر ادمین جدید هم سطح شما بوده وبه تمامی قسمت های پنل دسترسی پیدا میکند </span>
    <span class="alert alert-danger d-block mt-5 text-center"> سیستم به صورت خودکار اطلاعات لازم را برای کاربر ارسال میکند</span>

    <form method="post" action="<?= /** @var array $parametrs */
    url('admin/admins/update/'.$parametrs['id']) ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data" autocomplete="off">
        <div class="inputBox w-100">
            <label class="d-block mt-5"> نام و نام خانوادگی ادمین </label>
            <input type="text" name="full_name" class="w-100 form-control mt-1" value="<?php  echo $parametrs['full_name']; ?>" placeholder="لطفا نام و نام خانوادگی کاربر را وارد کنید" />
            <label class="d-block mt-5">شماره تلفن</label>
            <input type="text" name="phone" class="w-100 form-control mt-1" value="<?php echo $parametrs['phone']; ?>"  placeholder="لطفا  شماره تلفن کاربر را وارد کنید" />
            <label class="d-block mt-5">ادرس</label>
            <input type="text" name="address" class="w-100 form-control mt-1" value="<?php echo $parametrs['address']; ?>"  placeholder="لطفا ادرس کاربر را وارد کنید" />
            <label class="d-block mt-5">کد پرسنلی</label>
            <input type="text" name="personalCode" class="w-100 form-control mt-1" value="<?php  echo $parametrs['personalCode']; ?>"  placeholder="لطفا کد پرسنلی کاربر را وارد کنید" />

                <label class="d-block mt-5">عکس پروفایل ( جهت استفاده از عکس قبلی فیلد را خالی رد کنید )</label>

            <input type="file" name="profile" class="w-100 form-control mt-1" />
            <label class="d-block mt-5"> پسورد حساب کاربری (جهت اتفاده از پسوورد قبلی خالی رد کنید)</label>
            <input type="password" name="password" class="w-100 form-control mt-1" value=""  placeholder="لطفا پسورد کاربر را وارد کنید" />

            <div class=" d-flex align-items-center justify-content-end">
                    <button  class="btn btn-success mt-5" style="margin-right:auto;" type="submit">ویرایش</button>
            </div>
        </div>
    </form>



</div>
