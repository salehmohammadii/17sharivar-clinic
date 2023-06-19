<?php /** @var array $parametrs */
if (count($parametrs) >= 1) { ?>
    <div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>نام و نام خواندگی</th>
                <th>تلفن همراه</th>
                <th>ایمیل</th>
                <th>تاریخ ارسال</th>
                <th>موضوع</th>
                <th>سطح</th>
                <th>عملیات</th>
            </tr>
            </thead>

            <tbody class="table-light">
            <?php foreach ($parametrs as $key => $item) { ?>
                <tr class="text-center">
                    <td><?= $key + 1; ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['phone']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td dir="ltr"><?=toShamsi( $item['created_at']); ?></td>
                    <td class="subject"><?= $item['subject']; ?></td>
                    <td><?= $item['roll']; ?></td>
                    <td class="d-flex align-items-center justify-content-center">
                        <a class=" btn-danger py-1 px-4 text-white ms-1" href="<?= url('admin/meesages/delete/'.$item['id']) ; ?>">حذف</a>
                        <a class=" btn-primary py-1 px-4 text-white ms-1" href="<?= url('admin/messages/view/'.$item['id']) ; ?>">پاسخ و مشاهده</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

        </table>
    </div>
<?php }else{ ?>
    <span class=" alert alert-danger text-center mt-0 ms-7 me-7">داده ای یافت نشد</span>
<?php } ?>