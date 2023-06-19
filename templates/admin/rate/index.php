<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <?php if(count($parametrs)>=1) { ?>
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 900px;">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>نام و نام خانوادگی</th>
                <th>شماره تلفن</th>
                <th>نام دکتر معالج</th>
                <th>تاریخ ارسال</th>
                <th>تاریخ مراجعه</th>
                <th>محتوا</th>
                <th>امتیاز</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($parametrs as $key=>$reating_item) { ?>
                <tr class="text-center">
                    <td><?= $key+1; ?></td>
                    <td><?= $reating_item['name']; ?></td>
                    <td><?= $reating_item['phone']; ?></td>
                    <td><?= $reating_item['doctor']; ?></td>
                    <td style="direction: ltr"><?=toShamsi( $reating_item['created_at']); ?></td>
                    <td style="direction: ltr"><?=$reating_item['visit_date']; ?></td>
                    <td><?= $reating_item['msg']; ?></td>
                    <td ><?= $reating_item['reate'] . "  ستاره "; ?></td>
                    <td>
                        <a class=" btn-danger py-1 px-4 text-white" href="<?=url('admin/rate/delete/'.$reating_item['id']) ; ?>">حذف</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    <?php }else{ ?>
        <span class=" d-block alert alert-danger w-75 text-center m-auto mt-5"> نظرسنجی - انتقادات - پیشنهاداتی ثبت نشده است </span>
    <?php } ?>
</div>
