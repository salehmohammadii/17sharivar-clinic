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
                    <th class=""> محتوا </th>
                    <th class="">بخش مربوط به قوانین </th>
                    <th class="">عملیات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <?php foreach ($parametrs as $key => $trem) { ?>
                    <tr class=" text-center">
                        <td class=" text-info">
                            <?= $key + 1; ?>
                        </td>
                        <td>
                            <textarea class=" w-500px h-100px"><?= $trem['content']; ?></textarea>
                        </td>
                        <td>
                                                    <span class=" me-2 fs-6 fw-bold text-success"> <?php if ($trem['type'] == 1) {
                                                            echo "قوانین و شرایط ";
                                                        } else {
                                                            echo "قوانین حریم خصوصی";
                                                        } ?></span>
                        </td>
                        <td>
                            <a class=" btn-danger py-1 px-4 text-white" href="<?=url('admin/terms/delete/'.$trem['id']) ; ?>">حذف</a>
                            <a class=" btn-primary py-1 px-4 text-white cursor-pointer" href="<?=url('admin/terms/edit/'.$trem['id']) ; ?>">ویرایش</a>
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
