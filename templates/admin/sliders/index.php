<div class="tblBox w-100 h-100 overflow-auto ps-5 pe-5">
    <span class=" alert alert-danger d-block notic1" id="notic1" onclick="hidde(this)"> نکته : تعداد شماره اسلایدها باید با تعداد فایل های انتخابی برابر باشد</span>
    <span class=" alert alert-danger d-block " onclick="hidde(this)"> نکته : ازهر اسلایدر فقط یک مورد ساخته شود</span>
    <form method="post" action="<?= url('admin/slider/store')  ?>" class="mb-3 mb-lg-5 p-10" enctype="multipart/form-data">
        <h2>افزودن اسلایدر</h2>
        <div class="inputBox w-100">
            <label class="d-block">انتخاب  نوع اسلایدر</label>
            <select name="place" class="w-100 form-control mt-1">
                <option value="1"> اسلایدر حرفه ای (همراه عنوان و لینک برای اسلاید ها) </option>
                <option value="2"> اسلایدر معمولی (همراه عنوان) </option>
                <option value="3">  اسلایدر ساده </option>
                <option value="4">  اسلایدر خدماتی محصولی (Product Slider)  </option>
            </select>
            <label class="d-block mt-5 slide_row">تعداد اسلاید ها</label>
            <select name="slides" class="w-100 form-control mt-1">
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4</option>
                <option value="5"> 5</option>
                <option value="6"> 6</option>
                <option value="7"> 7</option>
                <option value="8"> 8</option>
                <option value="9"> 9</option>
                <option value="10"> 10</option>
                <option value="11"> 11</option>
                <option value="12"> 12</option>
                <option value="13"> 13</option>
                <option value="14"> 14</option>
                <option value="15"> 15</option>
            </select>
            <label class="d-block mt-5"> انتخاب بنر های اسلاید ها (لطفا همه فایل ها را یک جا انتخاب کنید)</label>
            <input type="file" name="files[]" class="w-100  form-control mt-1" multiple />
            <div class=" d-flex align-items-center justify-content-end">
                <button class="btn btn-success mt-5" style="margin-right:auto;" type="submit" name="new-slider">افزودن</button>
            </div>
        </div>
    </form>
</div>
</div>