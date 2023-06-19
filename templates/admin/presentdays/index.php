<form method="post" class="mb-3 mb-lg-5 p-10 overflow-auto">
    <div class="w-100">
        <?php /** @var array $parametrs */
        if (count($parametrs) >= 1) { ?>
            <table class=" table table-dark overflow-auto" style="min-width: 1000px;">
                <thead>
                <tr class=" text-center text-white " style="font-size:15px; background-color: #0dcaf0 !important;">
                    <th style="background-color: #0dcaf0;">نام دکتر</th>
                    <th style="background-color: #0dcaf0;">تخصص</th>
                    <th>شنبه</th>
                    <th>یکشنبه</th>
                    <th>دوشنبه</th>
                    <th>سه شنبه</th>
                    <th>چهار شنبه</th>
                    <th>پنج شنبه</th>
                    <th> جمعه</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($parametrs as $user) { ?>
                    <tr class=" text-center" style="font-size:14px;">
                        <td class=" text-white" style="background-color: #0dcaf0;"> <?=  "دکتر".$user['full_name']; ?></td>
                        <td class=" text-white " style="background-color: #0dcaf0;"> <?=  $user['sk_title']; ?></td>
                        <td class=" position-relative">
                            <div class=" d-flex flex-column align-items-center">
                            <input  type="checkBox" class=" opacity-0 ckeck_input position-absolute">
                            <span data-id="<?=  $user['id']; ?>" data-day="Saturday" class="my_checkBox <?php if($user['Saturday']==1) { ?> actives <?php }?>">
                                                        <small></small>
                                                    </span>
                            <input user-id="<?=  $user['id']; ?>" day_name="Saturday" type="text" class=" form-control w-80px h-30px mt-1 online_time" value="<?=  $user['Saturday_clock']; ?>">
                            </div>
                        </td>
                        <td class=" position-relative ">
                            <div class=" d-flex flex-column align-items-center">
                            <input  type="checkBox" class=" opacity-0 ckeck_input position-absolute">
                            <span data-id="<?=  $user['id']; ?>" data-day="Sunday" class="my_checkBox <?php if($user['Sunday']==1) { ?> actives <?php }?> ">
                                                        <small></small>
                                                    </span>
                            <input user-id="<?=  $user['id']; ?>" day_name="Sunday" type="text" class=" form-control w-80px h-30px mt-1 online_time" value="<?=  $user['Sunday_clock']; ?>">
                            </div>
                        </td>
                        <td class=" position-relative ">
                            <div class=" d-flex flex-column align-items-center">
                            <input  type="checkBox" class=" opacity-0 ckeck_input position-absolute">
                            <span data-id="<?=  $user['id']; ?>" data-day="Monday" class="my_checkBox <?php if($user['Monday']==1) { ?> actives <?php }?>">
                                                        <small></small>
                                                    </span>
                            <input user-id="<?=  $user['id']; ?>" day_name="Monday" type="text" class=" form-control w-80px h-30px mt-1 online_time" value="<?=  $user['Monday_clock']; ?>">
                            </div>
                        </td>
                        <td class=" position-relative">
                            <div class=" d-flex flex-column align-items-center">
                            <input  type="checkBox" class=" opacity-0 ckeck_input position-absolute">
                            <span data-id="<?=  $user['id']; ?>" data-day="Tuesday" class="my_checkBox <?php if($user['Tuesday']==1) { ?> actives <?php }?>">
                                                        <small></small>
                                                    </span>
                            <input user-id="<?=  $user['id']; ?>" day_name="Tuesday" type="text" class=" form-control w-80px h-30px mt-1 online_time" value="<?=  $user['Tuesday_clock']; ?>">
                            </div>
                        </td>
                        <td class=" position-relative">
                            <div class=" d-flex flex-column align-items-center">
                            <input  type="checkBox" class=" opacity-0 ckeck_input position-absolute">
                            <span data-id="<?=  $user['id']; ?>" data-day="Wednesday" class="my_checkBox <?php if($user['Wednesday']==1) { ?> actives <?php }?>">
                                                        <small></small>
                                                    </span>
                            <input user-id="<?=  $user['id']; ?>" day_name="Wednesday" type="text" class=" form-control w-80px h-30px mt-1 online_time" value="<?=  $user['Wednesday_clock']; ?>">
                            </div>
                        </td>
                        <td class=" position-relative">
                            <div class=" d-flex flex-column align-items-center">
                            <input  type="checkBox" class=" opacity-0 ckeck_input position-absolute">
                            <span data-id="<?=  $user['id']; ?>" data-day="Thursday" class="my_checkBox <?php if($user['Thursday']==1) { ?> actives <?php }?>">
                                                        <small></small>
                                                    </span>
                            <input user-id="<?=  $user['id']; ?>" day_name="Thursday" type="text" class=" form-control w-80px h-30px mt-1 online_time" value="<?=  $user['Thursday_clock']; ?>">
                            </div>
                        </td>
                        <td class=" position-relative">
                            <div class=" d-flex flex-column align-items-center">
                            <input  type="checkBox" class=" opacity-0 ckeck_input position-absolute">
                            <span data-id="<?=  $user['id']; ?>" data-day="Friday" class="my_checkBox <?php if($user['Friday']==1) { ?> actives <?php }?>">
                                                        <small></small>
                                                    </span>
                            <input user-id="<?=  $user['id']; ?>" day_name="Friday" type="text" class=" form-control w-80px h-30px mt-1 online_time" value="<?=  $user['Friday_clock']; ?>">
                            </div>
                        </td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <span class=" alert alert-danger w-100 d-block text-center">کاربری یافت نشد</span>
        <?php } ?>
    </div>
</form>
