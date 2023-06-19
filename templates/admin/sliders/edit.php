
    <div class="w-100 h-100 overflow-auto ps-5 pe-5">
        <?php /** @var array $parametrs */
        if ($parametrs['sliders'] >= 1) {
            foreach ($parametrs['sliders'] as $key => $slider) { ?>
                <div class=" ms-2 me-2  sliderbox mb-10" style="width: 97%;">
                    <h3 class=" d-block m-auto text-center p-5 fs-5">اسلایدر <?= $key + 1; ?> </h3>
                    <div class="form-check form-switch position-absolute toogle">
                        <input data-id="<?= $slider['id']; ?>" status="<?= $slider['status']; ?>" class="form-check-input slider-actions" type="checkbox" id="flexSwitchCheckChecked" <?php if ($slider['status'] == 1) { ?> checked <?php } ?>>
                    </div>
                    <span data-bs-toggle="modal" data-bs-target="#newSlide" data-id="<?= $slider['place']; ?>" class=" btn-primary w-45px h-25px d-flex align-items-center justify-content-center position-absolute fs-3 new_slide"><i class="bi bi-plus text-white fs-1"></i></span>
                    <a class=" position-absolute  btn-danger px-4 py-1 text-white" style="left: 115px; top:13px; border-radius:15px;" href="<?= url('admin/slider/delete/'.$slider['id']) ?>"><i class="bi bi-trash text-white fs-5 "></i></a>
                    <div class=" d-flex align-items-center justify-content-between overflow-auto m-3">
                        <?php if ($parametrs['slides'] >= 1) {
                            foreach ($parametrs['slides'] as $key2 => $slide) {
                                if ($slide['for_slider'] == $slider['place']) { ?>
                                    <div class=" w-200px m-3">
                                        <img src="<?=assets( $slide['file']); ?>" class="img-thumbnail w-200px h-150px" style="object-fit:cover; <?php if ($slide['status'] == 0) { ?> opacity:0.3; <?php } ?> ">
                                        <div class=" w-100 mt-2  d-flex align-items-center justify-content-between btnsBox">
                                            <span data-id="<?= $slide['id']; ?>" class="  px-2 py-1 d-block w-50px text-center text-white del_btn"><i class="bi bi-trash"></i></span>
                                            <?php if ($slide['status'] == 0) { ?>
                                                <span data-id="<?= $slide['id']; ?>" status="<?= $slide['status']; ?>" class="  px-2 py-1 d-block w-50px text-center text-white disable_btn"><i class="bi bi-check-circle-fill"></i> </span>
                                            <?php } else { ?>
                                                <span data-id="<?= $slide['id']; ?>" status="<?= $slide['status']; ?>" class="  px-2 py-1 d-block w-50px text-center text-white disable_btn"><i class="bi bi-x-square"></i> </span>
                                            <?php }  ?>
                                            <span data-bs-toggle="modal" data-bs-target="#editSlide" data-id="<?= $slide['id']; ?>" class="  px-2 py-1 d-block w-50px text-center text-white edit_btn"><i class="bi bi-pencil-square"></i></span>
                                        </div>
                                    </div>
                                <?php }
                            }
                        } else { ?>
                            <span class="w-100 alert alert-danger d-block text-center">اسلایدی برای اسلایدر ثبت نشده است</span>
                        <?php } ?>
                    </div>
                </div>
            <?php }
        } else { ?>
            <span class="w-100 alert alert-danger d-block text-center">اسلایدری درسیستم فعال نیست</span>
        <?php } ?>
    </div>
</div>


    <div class="modal fade" id="newSlide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اسلاید جدید</h5>
                    <span class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <form method="post" action="<?= url('admin/slider/store-slider') ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class=" form-group">
                            <label class=" d-block fs-7">فایل اسلاید (فرمت های PNG-JPEG-JPG مجاز میباشد)</label>
                            <input type="file" class=" form-control" name="files">
                            <input type="hidden" name="id" class="hide_input">
                            <label class=" d-block fs-7 mt-2">عنوان اسلاید (اختیاری) </label>
                            <input type="text" name="title" class="form-control">
                            <label class=" d-block fs-7 mt-2"> توضیحات اسلاید ( اختیاری) </label>
                            <textarea name="description" class=" form-control w-100 h-150px"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="new_slide">ذخیره کردن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editSlide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ویرایش اسلاید</h5>
                    <span class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <span class=" alert alert-danger d-block w-75 m-auto text-center mt-5">جهت استفاده از اسلاید فعلی فیلد فایل اسلاید را خالی رد کنید</span>
                <form method="post" action="<?= url('admin/slider/update-slide') ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class=" form-group">
                            <label class=" d-block fs-7">فایل اسلاید (فرمت های PNG-JPEG-JPG مجاز میباشد)</label>
                            <input type="file" class=" form-control" name="file">
                            <label class=" d-block fs-7 mt-2"> عنوان (اختیاری)</label>
                            <input type="text" class=" form-control" name="title">
                            <label class=" d-block fs-7 mt-2"> لینک (اختیاری) </label>
                            <input type="text" class=" form-control" name="link">
                            <input type="hidden" name="id" class="edit_input">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="edit_slide">ذخیره کردن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>