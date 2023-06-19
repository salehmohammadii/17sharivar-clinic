<div class="post d-flex flex-column-fluid " id="kt_post" >
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::RowBox1//////////////////////////////////////////////////////-->
        <div class="row g-5 g-xl-8">
            <!--begin::Colbox1/////////////////////////////////////////////////-->
            <div class="col-xl-6">
                <!--begin::Mixed Widget 12-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 bg-danger py-5">
                        <h3 class="card-title fw-bolder text-white">امار سایت</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Chart-->
                        <div class="mixed-widget-12-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px"></div>
                        <!--end::Chart-->
                        <!--begin::Stats-->
                        <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                            <!--begin::Row-->
                            <div class="row g-0 mb-7">
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400 ">تعداد کل کاربران</div>
                                    <div class="fs-2 fw-bolder text-gray-800 lens"><?= /** @var array $parametrs */
                                        $parametrs['users'] ?></div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400 ">تعداد پیام های کاربران</div>
                                    <div class="fs-2 fw-bolder text-gray-800 lens"><?=  $parametrs['messages'] ?></div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400">تعداد دکترهای درمانگاه</div>
                                    <div class="fs-2 fw-bolder text-gray-800 lens"><?=  $parametrs['doctors'] ?></div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400">تعداد ادمین</div>
                                    <div class="fs-2 fw-bolder text-gray-800 lens"><?=  $parametrs['admins'] ?></div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 12-->
            </div>
            <!--end::ColBox1//////////////////////////////////////////////////-->
            <!--begin::ColBox2///////////////////////////////////////////////-->
            <div class="col-xl-6">
                <!--begin::Mixed Widget 5-->
                <div class="card card-xxl-stretch mb-xl-8">
                    <!--begin::Beader-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">تعداد بازدیدهای هفتگی</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column">
                        <!--begin::Chart-->
                        <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px"></div>
                        <!--end::Chart-->
                        <!--begin::آیتمs-->
                        <div class="mt-5">
                            <!--begin::آیتم-->
                            <div class="d-flex flex-stack mb-6">
                                <!--begin::بخش-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Title-->
                                    <div>
                                        <a class="fs-6 text-gray-800 text-hover-primary fw-bolder">تعداد بازدید های امروز</a>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::بخش-->
                                <!--begin::Tags-->
                                <div class="badge badge-light fw-bold py-4 px-3 fs-7"><?=  $parametrs['seen_now']; ?></div>
                                <!--end::Tags-->
                            </div>
                            <!--end::آیتم-->
                            <!--begin::آیتم-->
                            <div class="d-flex flex-stack mb-6">
                                <!--begin::بخش-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Title-->
                                    <div>
                                        <a class="fs-6 text-gray-800 text-hover-primary fw-bolder">تعداد بازدید های دیروز</a>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::بخش-->
                                <!--begin::Tags-->
                                <div class="badge badge-light fw-bold py-4 px-3"><?=  $parametrs['seen_yesterday']; ?></div>
                                <!--end::Tags-->
                            </div>
                            <!--end::آیتم-->
                            <!--begin::آیتم-->
                            <div class="d-flex flex-stack mb-6">
                                <!--begin::بخش-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Title-->
                                    <div>
                                        <a class="fs-6 text-gray-800 text-hover-primary fw-bolder">تعداد کل بازدید ها</a>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::بخش-->
                                <!--begin::Tags-->
                                <div class="badge badge-light fw-bold py-4 px-3"><?= $parametrs['seen_all_days']; ?></div>
                                <!--end::Tags-->
                            </div>
                            <!--end::آیتم-->
                            <?php foreach($parametrs['seens'] as $chart_day) { ?>
                                <span class="seens opacity-0"><?= $chart_day ?></span>
                            <?php } ?>
                        </div>
                        <!--end::آیتمs-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 5-->
            </div>
            <!--end::ColBox2/////////////////////////////////////////////////-->
        </div>
        <!--end::RowBox1//////////////////////////////////////////////////////-->
        <!--begin::RowBox2////////////////////////////////////////////////////-->
        <div class="row gy-5 g-xl-8">
            <!--begin::ColBox3/////////////////////////////////////////////////-->
            <div class="col-xl-12">
                <!--begin::Tables Widget 9-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">لیست دکتر های جدید</span>
                            <span class="text-muted mt-1 fw-bold fs-7"> این لیست برای امروز میباشد </span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <?php if(count( $parametrs['new_docters'])>0){?>
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" style="min-width:700px;">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bolder text-center text-muted">
                                        <th class="">#</th>
                                        <th class="">شماره ایدی</th>
                                        <th class="">نام و نام خانوادگی</th>
                                        <th class="">تخصص</th>
                                        <th class="">کد پرسنلی</th>
                                        <th class="">رزومه</th>
                                        <th class="">شماره تلفن</th>

                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <?php foreach ($parametrs['new_docters'] as $key=>$new_user_item) { ?>
                                        <tr class=" text-center">
                                            <td class=" text-info">
                                                <?= $key+1; ?>
                                            </td>
                                            <td class=" text-danger">
                                                <?= $new_user_item['id']; ?>
                                            </td>
                                            <td>
                                                <span class="text-dark fw-bolder text-hover-primary fs-6"><?= $new_user_item['full_name']; ?></span>
                                            </td>
                                            <td>
                                                <span class="text-dark fw-bolder text-hover-primary d-block fs-6"><?= $new_user_item['skill']; ?></span>
                                            </td>
                                            <td>
                                                <span class="text-muted me-2 fs-7 fw-bold"> <?= $new_user_item['personalCode']; ?></span>
                                            </td>
                                            <td>
                                                <?= $new_user_item['resume']; ?>
                                            </td>
                                            <td>
                                                <?= $new_user_item['phone']; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            <?php }else{ ?>
                                <span class="w-100 alert alert-danger d-block text-center">کاربری یافت نشد</span>
                            <?php } ?>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 9-->
            </div>
            <!--end::ColBox3/////////////////////////////////////////////////-->
        </div>
        <!--end::RowBox2////////////////////////////////////////////////////-->
        <!--begin::Row-->
        <!--begin::Modals-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>