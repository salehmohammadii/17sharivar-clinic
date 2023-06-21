<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <div class="card-body py-3">
        <a class=" text-white  btn-success px-3 py-2 w-100px d-block ms-auto text-center me-5" style="border-radius: 5px;" href="<?= url('admin/health-service/create') ?>">افزودن  </a>

        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <?php if (count($parametrs) >= 1) { ?>
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder text-center text-muted">
                        <th class="">#</th>
                        <th class="">عنوان</th>
                        <th class="">نوع</th>
                        <th class="">تاریخ ثبت</th>
                        <th class="">محتوا</th>

                        <th class="">عملیات</th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    <?php foreach ($parametrs as $key => $para_part) {
                        ?>
                        <tr class=" text-center">
                            <td class=" text-info">
                                <?= $key + 1; ?>
                            </td>

                            <td>
                                <span class="text-dark fw-bolder text-hover-primary fs-6"><?= $para_part['title']; ?></span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary fs-6"><?php if($para_part['father_name']!=null){echo $para_part['father_name'];}else{echo 'اصلی';}?> </span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary d-block fs-6"><?= toShamsi( $para_part['created_at']); ?></span>
                            </td>
                            <td>
                                <textarea class=" mw-300px w-300px"> <?= $para_part['content']; ?></textarea>
                            </td>

                            <td>
                                <a class="btn-danger py-1 px-4 text-white" href="<?=url("admin/health-service/delete/".$para_part['id']) ; ?>">حذف</a>
                                <a class="btn-primary py-1 px-4 text-white" href="<?= url('admin/health-service/edit/'.$para_part['id']) ; ?>">ویرایش</a>
                            </td>
                        </tr>
                        <?php

                    }?>
                    </tbody>
                    <!--end::Table body-->
                </table>
            <?php } else { ?>
                <span class="w-100 alert alert-danger d-block text-center">داده ای یافت نشد</span>
            <?php } ?>
        </div>
    </div>
</div>
