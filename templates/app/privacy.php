
    <!-- ************ About_title img title code start ************* -->
    <section>
        <div class="container darokhane2 About_title">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
    <!-- ************ About_title img title code end ************* -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ContentHeaderModulePage">
                    <h1 class="ContentCaption">قوانین حریم خصوصی</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="terms-and-rules">
                    <h2> قوانین حریم خصوصی درمانگاه</h2>
                </div>
                <div class="trems_items">
                    <?php /** @var array $parametrs */
                    foreach ($parametrs['terms']  as $trem) {?>

                                <?= $trem['content']; ?>
                         
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div className="scroll-to-top">
        <span class="btn"><i class="fas fa-chevron-up"></i></i>
    </div>
