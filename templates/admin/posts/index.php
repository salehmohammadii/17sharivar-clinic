<div class="card-body py-3 h-100">
    <!--begin::Table container-->
    <div class="table-responsive h-100">
        <!--begin::Table-->
        <?php if (count($parametrs['posts']) >= 1) { ?>
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 1600px;">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bolder text-center text-muted">
                    <th class="">#</th>
                    <th class="">عنوان</th>
                    <th class="">موضوع مقاله</th>
                    <th class="">تاریخ ثبت</th>
                    <th class="">تعداد بازدید ها</th>
                    <th class="">نویسنده</th>
                    <th class="">منبع مقاله</th>
                    <th class="">فایل PDF</th>
                    <th class="">پوستر</th>
                    <th class="">عملیات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <?php foreach ($parametrs['posts'] as $key => $A_R_item) {
                    ?>
                    <tr class=" text-center">
                        <td class=" text-info">
                            <?= $key + 1; ?>
                        </td>
                        <td class=" text-danger">
                            <?= $A_R_item['title']; ?>
                        </td>

                        <td class=" text-danger">
                            <?= $A_R_item['art_type']; ?>
                        </td>
                        <td>
                            <span style="direction: ltr;" class="text-dark fw-bolder text-hover-primary d-block fs-6"><?= toShamsi($A_R_item['created_at']) ?></span>
                        </td>
                        <td>
                            <span class="text-danger me-2 fs-7 fw-bold"> <?= $A_R_item['reat_num']; ?></span>
                        </td>
                        <td>
                            <span class="text-muted me-2 fs-7 fw-bold"> <?= $A_R_item['writer']; ?></span>
                        </td>
                        <td>
                            <span class="text-muted me-2 fs-7 fw-bold"> <?= $A_R_item['surce']; ?></span>
                        </td>
                        <td>
                            <span class="text-muted me-2 fs-7 fw-bold"> <?= $A_R_item['pdf']; ?></span>
                        </td>
                        <td>
                            <img width="200" height="150" style="object-fit: cover;" src="<?= assets( $A_R_item['poster']); ?>" alt="poster">
                        </td>
                        <td>

                            <a class=" btn-danger py-1 px-4 text-white" href="<?=url('admin/post/delete/'.$A_R_item['id'])  ?>">حذف</a>
                            <a class=" btn-primary py-1 px-4 text-white" href="<?=url('admin/post/edit/'.$A_R_item['id'])  ?>">ویرایش</a>
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