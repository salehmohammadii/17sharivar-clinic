<?php /** @var array $parametrs */
if(count($parametrs)>0) {?>
    <div class="card-body py-3 mt-auto" style="max-width: 97%;">
                          
                                    <div class="table-responsive">
                                    

                                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bolder text-center text-muted">
                                                        <th class="">#</th>
                                                        
                                                        <th class="">عنوان</th>
                                                        <th class="">تاریخ ثبت</th>
                                                        <th class="">وضعیت</th>
                                                        <th class="">عملیات</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                <?php foreach($parametrs as $key=> $article_items_list) { ?>

                                                        <tr class=" text-center">
                                                            <td class=" text-info">
                                                             <?= $key+1 ?>
                                                            </td>

                                                            <td>
                                                                <span class="text-dark fw-bolder text-hover-primary fs-6"> <?= $article_items_list['title']; ?></span>
                                                            </td>
                                                            <td>
                                                                <span style="direction: ltr" class="text-dark fw-bolder text-hover-primary d-block fs-6 "><?= toShamsi($article_items_list['created_at']); ?></span>
                                                            </td>

                                                            <td>
                                                            <span class="text-dark fw-bolder text-hover-primary d-block fs-6">درحال نمایش</span>

                                                            </td>
                                                            <td>
                                                                <a class=" btn-danger py-1 px-4 text-white" href="<?=url('admin/category/delete/'.$article_items_list['id']) ; ?>">حذف</a>
                                                                <a class=" btn-primary py-1 px-4 text-white" href="<?=url('admin/category/edit/'.$article_items_list['id']) ; ?>">ویرایش</a>
                                                            </td>
                                                        </tr>

                                                   <?php } ?>
                                                </tbody>
                                            </table>
                                            <!-- <span class="w-100 alert alert-danger d-block text-center">داده ای یافت نشد</span> -->
                                    </div>
                                </div>
                    </div>
                    <?php } else { ?>
                                <span class="alert alert-danger d-block text-center ms-8 me-8">داده ای یافت نشد</span>
                            <?php } ?>