<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <?php if(count($parametrs)>=1) { ?>
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 1000px;">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>نام و نام خانوادگی</th>
                <th>شماره تلفن</th>
                <th>تاریخ ارسال</th>
                <th>عنوان مقاله</th>
                <th>محتوای کامنت</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($parametrs as $key=>$comments_item) { ?>
                <tr class="text-center">
                    <td><?= $key+1; ?></td>
                    <td><?= $comments_item['name']; ?></td>
                    <td><?= $comments_item['phone']; ?></td>
                    <td dir="ltr"><?= toShamsi( $comments_item['created_at']); ?></td>
                    <td ><?= $comments_item['a_title']; ?></td>
                    <td ><span><?= $comments_item['content']; ?></span></td>
                    <td>
                        <a class=" btn-danger py-1 px-4 text-white" href="<?= url('admin/comments/delete/'.$comments_item['id']) ; ?>">حذف</a>
                        <a class=" btn-primary py-1 px-4 text-white" href="<?= url('admin/comments/reply/'.$comments_item['id']) ; ?>">پاسخ</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    <?php }else{ ?>
        <span class=" d-block alert alert-danger w-75 text-center m-auto mt-5"> کامنتی ثبت نشده است </span>
    <?php } ?>
</div>