<form method="post" action="<?= url('admin/category/store') ?>" class="mb-3 mb-lg-5 p-10" autocomplete="off">
    <h3>اضافه کردن دسته بندی مقاله</h3>
    <div class="inputBox w-100">
        <label class="d-block mt-5">دسته بندی مقاله</label>
        <input name="title" class="w-100 form-control mt-1" value="" placeholder="لطفا عنوان دسته بندی مقاله را وارد کنید"  />
        <div class=" d-flex align-items-center justify-content-end">
                <button name="add_article_type" class="btn btn-success mt-5" style="margin-right:auto;" type="submit">اضافه کردن</button>
        </div>
    </div>
</form>