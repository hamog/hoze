<div class="modal fade mt-5" id="create-link" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document" style="min-width: 100vw; position: relative; bottom: 18vh">
    <div class="modal-content w-50">
      <div class="modal-header">
        <p class="modal-title font-weight-bolder">ثبت پیوند جدید</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route("admin.link.store")}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">تیتر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="title" class="form-control" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">رو تیتر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="subtitle" class="form-control" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">لینک :</label><span class="text-danger">&starf;</span>
                <input type="text" name="link" class="form-control" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                  <label for="description" class="font-weight-bold">توضیحات</label>
                  <textarea class="form-control" name="description" id="description"
                            rows="3">{!! old('description') !!}</textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب عکس:</label><span class="text-danger">&starf;</span>
                <input type="file" class="form-control" name="image" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="font-weight-bold">وضعیت :</label><span class="text-danger">&starf;</span>
                <select name="status" class="form-control" required>
                  <option value="none">انتخاب</option>
                  <option value="1">فعال</option>
                  <option value="0">غیر فعال</option>
                </select>
              </div>
            </div>
          </div>
          <button class="btn btn-info">ثبت</button>
        </form>
      </div>
    </div>
  </div>
</div>
