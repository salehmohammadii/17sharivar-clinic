<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <div class="card-body py-3">
        <a class=" text-white  btn-success px-3 py-2 w-100px d-block ms-auto text-center me-5" style="border-radius: 5px;" href="<?= url('admin/health-service/create') ?>">افزودن  </a>

        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <?php if (strlen($parametrs) >= 1) { ?>
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder text-center text-muted">
                        <th class="">#</th>
                        <th class="">عنوان</th>
                        <th class="">تاریخ ثبت</th>
                        <th class="">محتوا</th>
                        <th class="">عملیات</th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    <?= $parametrs ?>
                    </tbody>
                    <!--end::Table body-->
                </table>
            <?php } else { ?>
                <span class="w-100 alert alert-danger d-block text-center">داده ای یافت نشد</span>
            <?php } ?>
        </div>
    </div>
</div>
