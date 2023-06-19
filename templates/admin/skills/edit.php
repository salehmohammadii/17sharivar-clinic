<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <form method="post" action="<?= url('admin/skills/update/'.$parametrs['id']) ?>" class="mb-3 mb-lg-5 p-10" autocomplete="off">
<div class="inputBox w-100">
    <label class="d-block mt-5">عنوان تخصص</label>
    <input name="title" class="w-100 form-control mt-1" value="<?= $parametrs['title'] ?>" placeholder="لطفا عنوان تخصص را وارد کنید" />
    <div class=" d-flex align-items-center justify-content-end">
        <button name="add_skills_type" class="btn btn-success mt-5" style="margin-right:auto;" type="submit">ویرایش</button>
    </div>
</div>
    </form>
</div>