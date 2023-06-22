
    <?php /** @var array $parametrs */
    dd($parametrs);
if(count($parametrs['message'])>=1 && $parametrs['message']['reply'] !="") {?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="not_boxs">
                        <div class="headers">
                            <h1>جواب درخواست شما : </h1>
                            <span>پاسخ در : <small dir="ltr"><?= toShamsi($parametrs['message']['replay_date']); ?></small></span>
                        </div>
                        <div class="mains">
                            <h2>متن پاسخ</h2>
                            <p><?= $parametrs['message']['replay']; ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php }else {?>
        <span class="page_msg" style="display:block; margin:10px auto;">هیچ پیامی برای شما ثبت نشده است</span>
    <?php } ?>
<?php  ?>