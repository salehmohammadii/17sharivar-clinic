<div class="card-body py-3 h-100">
    <!--begin::Table container-->
    <div class="table-responsive h-100">
        <!--begin::Table-->
        <?php if ($parametrs['posts'] >= 1) { ?>
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 700px;">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bolder text-center text-muted">
                    <th class="">#</th>
                    <th class="">عنوان مقاله برچسب ها</th>
                    <th class="">تاریخ ثبت</th>
                    <th class="">برچسب های مقاله</th>
                    <th class="">عملیات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <?php
                foreach ($parametrs['posts'] as $key => $A_R_item) {
                    ?>
                    <tr class=" text-center">
                        <td class=" text-info">
                            <?= $key + 1; ?>
                        </td>
                        <td class=" text-danger">
                            <?= $A_R_item['title']; ?>
                        </td>
                        <td>
                            <?= toShamsi( $A_R_item['created_at']) ?>
                        </td>
                        <td class=" text-danger">
                            <?= $A_R_item['tags']; ?>
                        </td>

                        <td>
                            <a class=" btn-danger py-1 px-4 text-white" href="<?= url('admin/tag/delete/'.$A_R_item['id']) ; ?>">حذف</a>

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
</div>