<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
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
                        <th class=""> کد آزمایش</th>
                        <th class="">نام بیمار</th>
                        <th class="">نام پزشک معالج</th>
                        <th class="">شماره تلفن بیمار</th>
                        <th class="">وضعیت آزمایش</th>
                        <th class="">عملیات</th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    <?php foreach ($parametrs as $key => $lab_results_item) { ?>
                        <tr class=" text-center">
                            <td class=" text-info">
                                <?= $key + 1; ?>
                            </td>
                            <td class=" text-danger">
                                <?= $lab_results_item['code']; ?>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary fs-6"><?= $lab_results_item['name']; ?></span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary d-block fs-6"><?= $lab_results_item['doctor']; ?></span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary d-block fs-6"><?= $lab_results_item['phone']; ?></span>
                            </td>
                            <td>
                                <span class=" fw-bolder text-hover-primary d-block fs-6 text-danger"><?= $lab_results_item['status']; ?></span>
                            </td>
                            <td>
                                <a class=" btn-danger py-1 px-4 text-white" href="<?= url('admin/lab-result/delete/'. $lab_results_item['id']); ?>">حذف</a>
                                <a class=" btn-primary py-1 px-4 text-white" href="<?=url('admin/lab-result/edit/'. $lab_results_item['id']) ; ?>">ویرایش</a>
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
