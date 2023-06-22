<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
<!--begin::Modal dialog-->

        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" style="background-color:#009ef6;">
                <!--begin::Modal title-->
                <h2 class=" text-white titles2">ثبت پاسخ برای کاربر <?= $parametrs['name'] ?></h2>
                <!--end::Modal title-->
                <!--begin::Close-->

                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <p class="h3 p-2">نام: <?= $parametrs['name'] ?></p>
                <p class="h3 p-2">شماره تماس: <?= $parametrs['phone'] ?></p>
                <p class="h3 p-2">زمان: <?= toShamsi( $parametrs['created_at']) ?></p>
                <p class="h3 p-2">متن پیام: <?= $parametrs['content'] ?></p>
                <?php

                if(!empty($parametrs['d_content'])){
                    echo '<p class="h3 p-2">پاسخ به:  '.$parametrs['d_content'] .'</p>';
                }
                ?>
                <form method="post" action="<?= url('admin/comments/store/'.$parametrs['id']) ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
                    <div class="inputBox w-100">
                        <label class="d-block">نام نمایشی</label>
                        <input type="text" name="name" class="w-25 form-control mt-3 mb-3" value="" placeholder="در صورت خالی گذاشتن نام ادمین ثبت میشود" />
                        <label class="d-block mt-5">پاسخ</label>
                        <textarea name="content" class="w-100 h-300px resize-none form-control mt-3 user-answer-content" placeholder="لطفا متن پاسخ  خود را وارد کنید"></textarea>
                        <div class=" d-flex align-items-center justify-content-end">
                            <button name="comment-answer" class="btn btn-success mt-5" style="margin-right:auto;" type="submit"> ثبت پاسخ</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->

    <!--end::Modal dialog-->
</div>
