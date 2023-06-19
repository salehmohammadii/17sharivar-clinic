<div class="card-body py-3 h-100">
    <!--begin::Table container-->
    <div class="table-responsive h-100">
        <!--begin::Table-->
        <?php if (count($parametrs)>= 1) { ?>
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 1000px;">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bolder text-center text-muted">
                    <th class="">#</th>
                    <th class="">عنوان</th>
                    <th class="">عملیات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>


                <?php foreach ($parametrs as $key => $doctor) {
                    ?>
                    <tr class=" text-center">
                        <td class=" text-info">
                            <?= $key+1; ?>
                        </td>
                        <td class=" text-primary fw-bolder">
                            <?= $doctor['title']; ?>
                        </td>
                        <td>

                            <a class=" btn-danger py-1 px-4 text-white" href="<?= url('admin/skills/delete/'.$doctor['id']) ; ?>">حذف</a>
                            <a class=" btn-primary py-1 px-4 text-white" href="<?=url('admin/skills/edit/'.$doctor['id']) ; ?>">ویرایش</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <!--end::Table body-->
            </table>
        <?php } else { ?>
            <span class="w-100 alert alert-danger d-block text-center">داده ای یافت نشد</span>
        <?php } ?>

        <!-- <span class="w-100 alert alert-danger d-block text-center">داده ای یافت نشد</span> -->

        <!--end::Table-->
    </div>
    <!--end::Table container-->
</div>
