<div class="table-responsive h-100 px-7">
    <!--begin::Table-->
    <?php if (count($parametrs) >= 1) { ?>
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 " style="min-width: 1100px;">
            <!--begin::Table head-->
            <thead>
            <tr class="fw-bolder text-center text-muted">
                <th class="">#</th>
                <th class="">فرستنده</th>
                <th class="">شماره موبایل</th>
                <th class="">ایمیل</th>
                <th class="">تاریخ ثبت</th>
                <th class="">بخش مربوط به سوال</th>
                <th class="">سوال کاربر</th>
                <th class="">پاسخ </th>
                <th class="">عملیات</th>
            </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
            <?php foreach ($parametrs as $key => $FAQ_item) {
                ?>
                <tr class=" text-center">
                    <td class=" text-info">
                        <?= $key + 1; ?>
                    </td>
                    <td>
                        <?= $FAQ_item['name']; ?>
                    </td>
                    <td class=" text-primary inp">
                        <?= $FAQ_item['phone']; ?>
                    </td>
                    <td>
                        <?= $FAQ_item['email']; ?>
                    </td>
                    <td class=" text-success fs-4">
                        <?= toShamsi( $FAQ_item['created_at']); ?>
                    </td>
                    <td>
                        <?= $FAQ_item['subject']; ?>
                    </td>
                    <td>
                        <?= $FAQ_item['content']  ?>
                    </td>
                    <td>
                        <?= $FAQ_item['replay']  ?>
                    </td>
                    <td class=" d-flex align-items-center justify-content-center">
                        <a class=" btn-danger py-1 px-4 text-white mx-1" href="<?= url('admin/user-faq/delete/'.$FAQ_item['id']) ; ?>">حذف</a>
                        <a class=" btn-primary py-1 px-4 text-white mx-1" href="<?= url('admin/user-faq/set-answer/'.$FAQ_item['id']) ; ?>">ثبت یا ویرایش پاسخ</a>
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
<div class="modal fade" id="kt_modal_list1" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" style="background-color:#009ef6;">
                <!--begin::Modal title-->
                <h2 class=" text-white titles2">ثبت پاسخ برای کاربر</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-color-white btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <form method="post" action="<?= url('admin/user-faq/set-answer') ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
                    <div class="inputBox w-100">
                        <label class="d-block">پاسخ</label>
                        <textarea name="content" class="w-100 h-300px resize-none form-control mt-1 user-answer-content" placeholder="لطفا متن پاسخ  خود را وارد کنید"></textarea>
                        <input type="hidden" name="data-id" class="hide_input" />
                        <div class=" d-flex align-items-center justify-content-end">
                            <button name="faq-answer" class="btn btn-success mt-5" style="margin-right:auto;" type="submit"> ثبت پاسخ</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
