<div class="card-body py-3">

    <!--begin::Table container-->
    <div class="table-responsive">

        <!--begin::Table-->
        <?php /** @var array $parametrs */
        if (count($parametrs) >= 1) { ?>
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bolder text-center text-muted">
                    <th class="">#</th>
                    <th class="">عنوان </th>
                    <th class="">تاریخ</th>
                    <th class="">عملیات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <?php foreach ($parametrs as $key => $faq_type) {?>
                    <tr class=" text-center">
                        <td class=" text-info">
                            <?= $key + 1; ?>
                        </td>

                        <td>
                            <span class="text-dark fw-bolder text-hover-primary fs-6"><?= $faq_type['title']; ?></span>
                        </td>
                        <td>
                            <span class="text-muted me-2 fs-7 fw-bold"> <?= toShamsi( $faq_type['created_at']); ?></span>
                        </td>
                        <td>
                            <a class=" btn-danger py-1 px-4 text-white" href="<?=url('admin/faq-type/delete/'.$faq_type['id']) ; ?>">حذف</a>
                        </td>
                    </tr>
                <?php } ?>
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