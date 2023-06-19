<a class=" text-white  btn-primary px-3 py-2 w-100px d-block ms-auto text-center me-9" style="border-radius: 5px;" href="<?= url('admin/admins/create') ?>">افزودن ادمین  </a>
<div class="card-body py-3 h-100">

    <!--begin::Table container-->
    <div class="table-responsive h-100">
        <!--begin::Table-->
        <?php /** @var array $parametrs */
        if (count($parametrs) >= 1) { ?>
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 700px;">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bolder text-center text-muted">
                    <th class="">#</th>
                    <th class="">نام و نام خانوادگی</th>
                    <th class="">شماره تلفن</th>
                    <th class="">کد پرسنلی</th>
                    <th class="">تاریخ ثبت نام</th>

                    <th class="">عملیات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>

                <?php foreach ($parametrs as $key => $admin) {
                    ?>
                    <tr class=" text-center">
                        <td class=" text-info">
                            <?= $key+1; ?>
                        </td>
                        <td class=" text-primary fw-bolder">
                            <?= $admin['full_name']; ?>
                        </td>
                        <td>
                            <span class="text-dark fw-bolder text-hover-primary d-block fs-6"><?= $admin['phone']; ?></span>
                        </td>
                        <td>
                            <span class="text-dark fw-bolder text-hover-primary d-block fs-6"><?= $admin['personalCode']; ?></span>
                        </td>
                        <td>
                            <span class="text-danger me-2 fs-6 fw-bolder text-hover-primary"><?= toShamsi($admin['created_at']); ?></span>
                        </td>
                        <td>

                            <a class=" btn-danger py-1 px-4 text-white" href="<?=url('admin/admins/delete/'.$admin['id']) ; ?>">حذف</a>
                            <a class=" btn-primary py-1 px-4 text-white" href="<?=url('admin/admins/edit/'.$admin['id']) ; ?>">ویرایش</a>
                            <?php if($admin['status']==1) { ?>
                                <a class=" btn-success py-1 px-4 text-white" href="<?=url('admin/admins/deactivate/'.$admin['id']) ; ?>">غیرفعال سازی</a>
                            <?php } else{?>
                                <a class=" btn-success py-1 px-4 text-white" href="<?=url('admin/admins/activate/'.$admin['id']) ; ?>">فعال سازی</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                } ?>

                </tbody>
                <!--end::Table body-->
            </table>
        <?php } else { ?>
            <span class="w-100 alert alert-danger d-block text-center">داده ای یافت نشد</span>
        <?php } ?>



        <!--end::Table-->
    </div>
    <!--end::Table container-->
</div>