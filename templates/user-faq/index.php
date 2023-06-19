<div class="table-responsive h-100 px-7">
    <?php /** @var array $parametrs */
    if (count($parametrs) >= 1) { ?>
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 1000px;">
            <!--begin::Table head-->
            <thead>
            <tr class="fw-bolder text-center text-muted">
                <th class="">#</th>
                <th class="">عنوان</th>
                <th class="">تاریخ ثبت</th>
                <th class="">پاسخ</th>
                <th class="">عملیات</th>
            </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
            <?php foreach ($parametrs as $key => $item) {
                ?>
                <tr class=" text-center">
                    <td class=" text-info">
                        <?= $key + 1; ?>
                    </td>
                    <td class=" text-danger inp">
                        <?= $item['title']; ?>
                    </td>
                    <td style="direction: ltr" class=" text-success fs-4">
                        <?= toShamsi( $item['created_at']); ?>
                    </td>
                    <td>
                        <textarea class=" form-control overflow-auto w-300px m-auto inp"><?= $item['content']  ?></textarea>
                    </td>
                    <td>
                        <a class=" btn-danger py-1 px-4 text-white" href="<?=url('admin/faq/delete/'.$item['id']) ; ?>">حذف</a>
                        <a data-id="<?= $item['id']; ?>" class=" btn-primary py-1 px-4 text-white cursor-pointer edit-btns" href="<?=url('admin/faq/edit/'.$item['id']) ; ?>">ویرایش</a>
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
